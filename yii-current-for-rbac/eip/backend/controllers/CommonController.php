<?php
namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Controller;

class CommonController extends Controller
{
    /*登录才有权限访问的方法*/
    public $loginAction = [];
	
    /**
     * 判断登录
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error', 'captcha','caiji-news'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => $this->loginAction,
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /*
    * 权限判断
    * 传入$action => \yii\base\InlineAction对象
    * id为目前要访问的方法名称，例如index
    * $action->controller->id是目前访问的控制器名称，例如site
    * 
    */
    public function beforeAction($action)
    {
        if(!parent::beforeAction($action)){
            return false;
        }
        $controller = $action->controller->id;
        $actionName = $action->id;
		/*判断控制器方法登录*/
        if($controller=='site'&&$actionName=='login'){
            return true;
        }
        /*判断控制器方法验证码*/
        if($controller=='site'&&$actionName=='captcha'){
            return true;
        }
        /*判断控制器方法退出登录*/
        if($controller=='site'&&$actionName=='logout'){
            return true;
        }

        /*判断控制器方法退出登录*/
        if($controller=='collection'){
            return true;
        }


        if(Yii::$app->user->can($controller.'/'.$actionName)){
            return true;
        }
        throw new \yii\web\UnauthorizedHttpException('对不起，您没有访问'.$controller.'/'.$actionName.'权限！');
    }

}