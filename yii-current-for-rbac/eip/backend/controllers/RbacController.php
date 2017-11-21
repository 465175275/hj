<?php
namespace backend\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\db\Query;

class RbacController extends CommonController
{

	/*登录才有权限访问的方法*/
    public $loginAction = ['index','create','update','delete','assignitem','createitem','updateitem','deleteitem'];

    /*------------------------------------------------角色的操作------------------------------------------------*/

	/*显示权限列表*/
	public function actionIndex()
	{
		$auth = Yii::$app->authManager;
		$data = new ActiveDataProvider([
			'query' => (new Query)->from($auth->itemTable)->where('type=1')->orderBy('created_at desc'),
			'pagination' => ['pageSize'=>20],
		]);
		return $this->render('index',['dataProvider'=>$data]);
	}

	/*
	* 添加角色
	*/
	public function actionCreate()
	{
		if(Yii::$app->request->isPost){
			/*实例化authManager类*/
			$auth = Yii::$app->authManager;
			/*获取role的类*/
			$role = $auth->createRole(null);
			/*
			* role不能直接使用ActiveRecord来生成表单
			*/
			$post = Yii::$app->request->post();

			if(empty($post['name']) || empty($post['description'])){
				throw new \Exception('参数错误');
			}

			$role->name = $post['name'];
			$role->description = $post['description'];
			$role->ruleName = empty($post['ruleName']) ? null:$post['ruleName'];
			$role->data = empty($post['data']) ? null:$post['data'];
			if($auth->add($role)){
				Yii::$app->session->setFlash('info','角色添加成功！');
				return $this->redirect(['index']);
			}else{
				Yii::$app->session->setFlash('error','角色添加失败！');
				return $this->redirect(['index']);
			}

		}
		return $this->render('create');
	}
	/*
	* 修改角色
	*/
	public function actionUpdate($name)
	{
		$name = htmlspecialchars($name);
		/*实例化authManager类*/
		$auth = Yii::$app->authManager;
		/*获取role的类*/
		$role = $auth->getRole($name);
		if(Yii::$app->request->isPost){
			$post = Yii::$app->request->post();
			if(empty($post['description'])){
				throw new \Exception('参数错误');
			}
			$role->description = $post['description'];
			$role->ruleName = empty($post['ruleName']) ? null:$post['ruleName'];
			$role->data = empty($post['data']) ? null:$post['data'];
			if($auth->update($post['name'],$role)){
				Yii::$app->session->setFlash('info','角色修改成功！');
				return $this->redirect(['index']);
			}else{
				Yii::$app->session->setFlash('error','角色修改失败！');
				return $this->redirect(['index']);
			}
		}
		return $this->render('update',['role'=>$role]);
	}
	/*
	* 删除角色
	*/
	public function actionDelete($name)
	{
		$name = htmlspecialchars($name);
		/*实例化authManager类*/
		$auth = Yii::$app->authManager;
		/*获取role的类*/
		$role = $auth->getRole($name);
		if($auth->remove($role)){
			Yii::$app->session->setFlash('info','角色删除成功！');
			return $this->redirect(['index']);
		}else{
			Yii::$app->session->setFlash('error','角色删除失败！');
			return $this->redirect(['index']);
		}
	}

	/*-----------------------------------------------角色分配角色或者节点-------------------------------------------------*/

	/*
	* 给角色分配角色或者节点
	*/
	public function actionAssignitem($name)
	{
		$name = htmlspecialchars($name);
		/*实例化类*/
		$auth = Yii::$app->authManager;
		/*获取角色列表*/
		$parent = $auth->getRole($name);

		if(Yii::$app->request->isPost){
			$post = Yii::$app->request->post();
			if(\backend\models\Rbac::addChild($post['children'],$name)){
				Yii::$app->session->setFlash('info','授权成功！');
			}
		}
		/*获取已经选择的权限*/
		$children = \backend\models\Rbac::getChildrenByName($name);

		$roles = \backend\models\Rbac::getOptions($auth->getRoles(),$parent);

		/*获取权限列表*/
		$permissions = \backend\models\Rbac::getOptions($auth->getPermissions(),$parent);
		return $this->render('assignitem',['parent'=>$name,'roles'=>$roles,'permissions'=>$permissions,'children'=>$children]);
	}

	/*----------------------------------------------节点的手动增删改查操作--------------------------------------------------*/

	/*添加节点*/
	public function actionCreateitem(){
		/*实例化authManager类*/
		$auth = Yii::$app->authManager;
		if(Yii::$app->request->isPost){
			
			$post = Yii::$app->request->post();
			/*简单表单验证*/
			if(empty($post['description'])||empty($post['rule_name'])){
				Yii::$app->session->setFlash('error','名称或者规则名称不能为空');
				return $this->render('assignitem');
			}
			/*判断是否存在，不存在则插入，存在就不插入*/
			if(!$auth->getPermission($post['rule_name'])){
				/*创建*/
				$obj = $auth->createPermission($post['rule_name']);
				/*描述名称*/
				$obj->description = $post['description'];
				$auth->add($obj);
				Yii::$app->session->setFlash('info','节点添加成功！');
				return $this->redirect(['createitem']);
			}else{
				Yii::$app->session->setFlash('error','节点已存在！');
				return $this->redirect(['createitem']);
			}
		}
		$data = (new Query)->from($auth->itemTable)->where('type=2')->orderBy('created_at desc')->all();
		return $this->render('createitem',['data'=>$data]);
	}
	/*修改节点*/
	public function actionUpdateitem($name)
	{
		/*实例化authManager类*/
		$auth = Yii::$app->authManager;
		$name = htmlspecialchars($name);
		$model = $auth->getPermission($name);
		if(Yii::$app->request->isPost){
			$post = Yii::$app->request->post();
			/*获取当前要修改的对象*/
			$obj = $auth->getPermission($post['name']);
			/*重新赋值*/
			$obj->description = $post['description'];
			$obj->name = $post['rule_name'];

			if($auth->update($post['name'],$obj)){
				Yii::$app->session->setFlash('info','节点修改成功！');
				return $this->redirect(['createitem']);
			}else{
				Yii::$app->session->setFlash('error','节点修改失败！');
				return $this->redirect(['createitem']);
			}
		}

		return $this->render('updateitem',['model'=>$model,'name'=>$name]);

	}
	/*删除节点*/
	public function actionDeleteitem($name)
	{
		/*实例化authManager类*/
		$auth = Yii::$app->authManager;
		$name = htmlspecialchars($name);
		$obj = $auth->getPermission($name);
		if($auth->remove($obj)){
			Yii::$app->session->setFlash('info','节点删除成功！');
			return $this->redirect(['createitem']);
		}else{
			Yii::$app->session->setFlash('error','节点删除失败！');
			return $this->redirect(['createitem']);
		}
	}


}