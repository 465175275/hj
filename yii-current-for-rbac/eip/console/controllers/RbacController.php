<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{
	/*
	* 用于初始化所有权限节点
	* yii rbac/init
	* 
	* 
	*/
	public function actionInit()
	{
		$trans = Yii::$app->db->beginTransaction();
		try{
			/*所有后台控制器的目录*/
			$dir = dirname(dirname(dirname(__FILE__))).'/backend/controllers';
			/*目录下所有文件*/
			$controllers = glob($dir.'/*');
			/**/
			$permissions = [];
			/*遍历所有文件*/
			foreach($controllers as $controller){
				$content = file_get_contents($controller);
				preg_match('/class (\w+)Controller/', $content, $match);
				$cName = $match[1];
				$permissions[] = strtolower($cName.'/*');
				preg_match_all('/public function action(\w+)/', $content, $matches);
				foreach($matches[1] as $aName){
					$permissions[] = strtolower($cName.'/'.$aName);
				}

			}
			/*导入数据表*/
			$auth = Yii::$app->authManager;
			foreach($permissions as $permission){
				/*判断是否存在，不存在则插入，存在就不插入*/
				if(!$auth->getPermission($permission)){
					/*创建*/
					$obj = $auth->createPermission($permission);
					/*描述名称*/
					$obj->description = $permission;
					$auth->add($obj);
				}
			}
			$trans->commit();
			echo "success \n";
		}catch(\Exception $e){
			$trans->rollback();
			echo "error \n";
		}
	}
}