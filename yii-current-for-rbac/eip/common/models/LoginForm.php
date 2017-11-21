<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;
    public $captcha;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*验证码*/
            ['captcha','required','message' => '验证码不能为空'],
            ['captcha','captcha','captchaAction'=>'site/captcha','message'=>'验证码错误'],
            // username and password are both required
            ['username', 'required','message'=>'用户名不能为空！'],
            ['username','match', 'pattern' => '/^\w{5,20}$/','message'=>'用户名格式错误'],
            ['password', 'required','message'=>'密码不能为空！'],
            ['password','match', 'pattern' => '/^\w{5,20}$/','message'=>'密码格式错误'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean','message'=>'非法记住登录！'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            
            
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, '用户名或者密码错误，或者您已被封禁');
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户ID',
            'username' => '用户名',
            'password' => '密码',
            'rememberMe' => '记住登录状态（一周内免登录）',
            'captcha'=>'验证码'
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            if($this->addIp()){
                return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
            }else{
                Yii::$app->session->setFlash('error','登录失败！');
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    /*自定义写入登录IP*/
    protected function addIp()
    {
        $model = new Loginlog();
        $model->user_id = $this->_user->id;
        $model->ip = Yii::$app->request->getUserIP();
        $model->created_time = time();
        if($model->save()){
            return true;
        }
    }

}
