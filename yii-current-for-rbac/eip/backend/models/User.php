<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $phone
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 */
class User extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*校验规则（用户的添加，修改，我的信息修改，密码修改）*/
            ['username','required','message'=>'用户名不能为空','on'=>['create']],
            ['username','match', 'pattern' => '/^\w{5,20}$/','message'=>'用户名格式错误','on'=>['create','update']],

            ['password_hash','required','message'=>'密码不能为空','on'=>['create','mypassword', 'upuserpass']],
            ['password_hash','match', 'pattern' => '/^\w{5,20}$/','message'=>'密码格式错误','on'=>['create','mypassword', 'upuserpass']],

            ['repassword','required','message'=>'密码不能为空','on'=>['mypassword','upuserpass']],
            ['repassword','match', 'pattern' => '/^\w{5,20}$/','message'=>'重复密码格式错误','on'=>['mypassword','upuserpass']],
            ['repassword', 'compare', 'compareAttribute' => 'password_hash','message'=>'两次输入密码不一致','on'=>['mypassword','upuserpass']],

            ['email','required','message'=>'邮箱不能为空','on'=>['create','myinfo','update']],
            ['email','email','message'=>'邮箱格式错误','on'=>['create','myinfo','update']],

            ['phone','required','message'=>'手机号不能为空','on'=>['create','myinfo','update']],
            ['phone','match', 'pattern' => '/^\d{11}$/','message'=>'手机号格式错误','on'=>['create','myinfo','update']],

            ['status','required','message'=>'状态不能为空','on'=>['create','update']],

            ['created_at','safe'],
            
            ['updated_at','safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '用户ID',
            'username' => '用户名',
            'password_hash' => '密码',
            'repassword' => '重复密码',
            'password_reset_token' => 'Password Reset Token',
            'email' => '邮箱',
            'phone' => '手机号',
            'status' => '状态',
            'created_at' => '创建时间',
            'updated_at' => '修改时间',
        ];
    }
}
