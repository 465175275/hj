<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use backend\models\UserSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends CommonController
{
    /*登录才有权限访问的方法*/
    public $loginAction = ['index','view','create','update','delete','myinfo','mypassword', 'upuserpass'];
    /**
     * 用户列表
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * 创建新用户
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        /*声明场景*/
        $model->scenario='create';

        $auth = Yii::$app->authManager;

        if ($model->load(Yii::$app->request->post())&&$model->validate()){
            /*获取数据*/
            $post = Yii::$app->request->post();
            if(empty($post['role'])){throw new \Exception('参数错误');}
            $model->created_at=time();
            $model->updated_at=time();
            /*加密密码*/
            $model->password_hash = Yii::$app->getSecurity()->generatePasswordHash($model->password_hash);
            if($model->save(false)) {
                $authorRole = $auth->getRole($post['role']);
                if($auth->assign($authorRole, $model->attributes['id'])){
                    Yii::$app->session->setFlash('info','创建新用户成功，且授权成功');
                    return $this->redirect(['index']);
                }else{
                    Yii::$app->session->setFlash('info','创建新用户成功，授权失败！');
                    return $this->redirect(['index']);
                }
            }else{
                Yii::$app->session->setFlash('error','创建新用户失败');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'roles' => \backend\models\Rbac::getRoles(),
            ]);
        }
    }

    /**
     * 修改用户密码
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpuserpass($id)
    {
        /*查找我的信息*/
        $model = $this->findModel($id);

        /*声明场景*/
        $model->scenario='upuserpass';

        /*判断是否为post提交*/
        if($model->load(Yii::$app->request->post())&&$model->validate()){
            $model->updated_at=time();
            /*加密密码*/
            $model->password_hash = Yii::$app->getSecurity()->generatePasswordHash($model->password_hash);
            if($model->save(false)) {
                Yii::$app->session->setFlash('info','用户密码修改成功');
                return $this->redirect(['index']);
            }else{
                Yii::$app->session->setFlash('error','用户密码修改失败');
                return $this->redirect(['index']);
            }
        }
        return $this->render('upuserpass', [
            'model' => $model,
        ]);
    }

    /**
     * 修改用户
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        /*声明场景*/
        $model->scenario='update';

        $auth = Yii::$app->authManager;

        if ($model->load(Yii::$app->request->post())&&$model->validate()){
            /*获取数据*/
            $post = Yii::$app->request->post();
            if(empty($post['role'])){throw new \Exception('参数错误');}

            $model->updated_at=time();

            if($model->save(false)) {
                $authorRole = $auth->getRole($post['role']);
                if($auth->assign($authorRole, $model->attributes['id'])){
                    Yii::$app->session->setFlash('info','修改用户成功，且授权成功');
                    return $this->redirect(['index']);
                }else{
                    Yii::$app->session->setFlash('info','修改用户成功，授权失败！');
                    return $this->redirect(['index']);
                }
            }else{
                Yii::$app->session->setFlash('error','用户修改失败');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'roles' => \backend\models\Rbac::getRoles(),
                'role' => \backend\models\Rbac::getUserRole($auth->getRolesByUser($id)),
            ]);
        }
    }

    /**
     * 删除用户
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    /*
    *   修改我的信息
    *
    *
    */
    public function actionMyinfo()
    {
        /*查找我的信息*/
        $model = User::find()->where(['id'=>Yii::$app->user->identity->id])->one();

        /*声明场景*/
        $model->scenario='myinfo';

        /*判断是否为post提交*/
        if($model->load(Yii::$app->request->post())){
            $model->updated_at=time();
            if($model->save()) {
                Yii::$app->session->setFlash('info','我的信息修改成功');
                return $this->redirect(['myinfo']);
            }else{
                Yii::$app->session->setFlash('error','我的信息修改失败');
                return $this->redirect(['myinfo']);
            }
        }
        return $this->render('myinfo', [
            'model' => $model,
        ]);
        

    }

    /*
    *  修改我的密码
    */
    public function actionMypassword()
    {
        /*查找我的信息*/
        $model = User::find()->where(['id'=>Yii::$app->user->identity->id])->one();

        /*声明场景*/
        $model->scenario='mypassword';

        /*判断是否为post提交*/
        if($model->load(Yii::$app->request->post())&&$model->validate()){
            $model->updated_at = time();
            /*加密密码*/
            $model->password_hash = Yii::$app->getSecurity()->generatePasswordHash($model->password_hash);

            if($model->save(false)) {
                Yii::$app->session->setFlash('info','密码修改成功');
                return $this->redirect(['mypassword']);
            }else{
                Yii::$app->session->setFlash('error','密码修改失败');
                return $this->redirect(['mypassword']);
            }
        }

        return $this->render('mypassword', [
            'model' => $model,
        ]);
    } 


}
