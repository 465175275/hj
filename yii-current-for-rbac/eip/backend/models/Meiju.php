<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%Collection}}".
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
class Meiju extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meiju}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*校验规则（用户的添加，修改，我的信息修改，密码修改）*/
            ['title_en','required','message'=>'名字不能为空','on'=>['create','update']],
            ['img','required','message'=>'主图不能为空','on'=>['create','update']],

            ['updated_at','safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mid' => 'ID',
            'tid' => '采集的ID',
            'title_en' => '名字',
            'title_cn' => '英文名',
            'img' => '主图',
            'update_day' => '更新日',
            'update_status' => '更新状态',
            'type' => '分类',
            'update_time' => '采集更新时间',
            'back_status' => '回归状态',
            'back_time' => '回归时间',
            "Introduction"=>"详情介绍",
            "click_num"=>"点击量",
            "subscription_num"=>"订阅量",
            "url"=>"采集页面链接",
            'updated_at' => '修改时间',
        ];
    }
}
