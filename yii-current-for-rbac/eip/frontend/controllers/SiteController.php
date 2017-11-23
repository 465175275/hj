<?php
namespace frontend\controllers;

use backend\models\Meiju;
use backend\models\MeijuClickNum;
use backend\models\MeijuDetial;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        //本周热播
        $hot=MeijuClickNum::find()->select(["meiju.mid","meiju.title_cn","meiju.title_en","meiju.img","sum(meiju_click_num.click_num) as click_nums"])
            ->join('LEFT JOIN','meiju','meiju_click_num.mid = meiju.mid')
            ->andWhere(['>=','meiju_click_num.day',date("Ymd",strtotime("-8 day"))])
            ->groupBy('meiju_click_num.mid')->orderBy("click_nums")
            ->limit(10)->all();

        //今日下载排行
       $clickList= MeijuClickNum::find()->select(['meiju_click_num.did','meiju.title_cn','meiju.title_en','meiju.title_en','meiju_detail.title','meiju_click_num.click_num'])
           ->join('LEFT JOIN','meiju','meiju_click_num.mid = meiju.mid')
           ->join('LEFT JOIN','meiju_detail','meiju_detail.did = meiju_click_num.did')
           ->andWhere(['meiju_click_num.day'=>date("Ymd")])
           ->asArray()->orderBy("meiju_click_num.click_num DESC")->limit(10)->all();
        //今日更新推荐
        $ga = date("w");
        switch($ga){
            case 1 : $ga= "每周一";break;
            case 2 : $ga= "每周二";break;
            case 3 : $ga= "每周三";break;
            case 4 : $ga= "每周四";break;
            case 5 : $ga= "每周五";break;
            case 6 : $ga= "每周六";break;
            case 0 : $ga= "每周日";break;
            default : $ga= "随机";
        };
        $tuijian=Meiju::find()->select(['mid','subscription_num','title_cn','title_en'])->andWhere(['update_day'=>$ga])->limit(15)->orderBy("subscription_num DESC")->all();

        $type=Meiju::find()->select(['type'])->andWhere(['!=',"type",''])->groupBy("type")->all();
        $row=[];
        foreach ($type as $key=>$val){
            $row[$key]=Meiju::find()->where(["type"=>$val['type']])->limit(8)->groupBy("mid")->all();
        }
        return $this->render('index',['type'=>$type,'typeList'=>$row,'tuijian'=>$tuijian,'clickList'=>$clickList,'hot'=>$hot]);
    }


    /**
     * 排行榜
     * @return string
     */
    public function actionLeaderboards(){
        //分页读取数据
        $model = Meiju::find();
        if(isset($_GET['title_en']) && $_GET['title_en']){
            $model->andFilterWhere(['like', 'title_en', trim($_GET['title_en'])]);
        }

        $pagination = new Pagination([
            'defaultPageSize' => 50,
            'totalCount' => $model->count(),
        ]);

        $model = $model->orderBy('subscription_num DESC')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('leaderboards', [
            'data' => $model,
            'pagination' => $pagination,
        ]);
    }


    /**
     * 详情列表
     * @return string
     */
    public function actionMeijuList(){
        if(isset($_GET['mid']) && is_numeric($_GET['mid'])){
            $info = Meiju::findOne($_GET['mid']);
            $list = MeijuDetial::find()->where(['mid' => $_GET['mid']])->orderBy('create_time DESC')->all();

            //分季
            $season=array_unique(array_column($list,"season"));
            //倒序
            arsort($season);
            return $this->render('meijuList', [
                'info' => $info,
                'season'=>$season,
                'list' => $list,
            ]);
        }
    }


    /**
     * 单集详情
     */
    public function actionMeijuDetail(){

    }


    /**
     *统计单集下载量
     */
    public function actionMeijuClick(){
          if(Yii::$app->request->isPost){
             $mid= Yii::$app->request->post("mid");
             $did= Yii::$app->request->post("did");
             $day=date("Ymd");
             $MeijuClickNum= new MeijuClickNum();
             $num=MeijuClickNum::find()->andWhere(['day'=>$day,'mid'=>$mid,'did'=>$did])->one();
             if($num){
                 $num->click_num+=1;
                 $num->save();
             }else{
                 $MeijuClickNum->day=$day;
                 $MeijuClickNum->click_num=1;
                 $MeijuClickNum->mid=$mid;
                 $MeijuClickNum->did=$did;
                 $MeijuClickNum->updat_at=time();
                 $MeijuClickNum->save();
             }
              $num=Meiju::find()->andWhere(['mid'=>$mid])->one();
              $num->click_num+=1;
              $num->save();

              $num=MeijuDetial::find()->andWhere(['did'=>$did])->one();

              $num->click_num+=1;
              $num->save();
           }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
       // var_dump($model->load(Yii::$app->request->post()));exit;
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
           //var_dump($model->getErrors());  exit;
            //echo 2;exit;
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
