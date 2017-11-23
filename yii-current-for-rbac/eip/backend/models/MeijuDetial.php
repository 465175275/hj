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
class MeijuDetial extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meiju_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*校验规则（用户的添加，修改，我的信息修改，密码修改）*/
            ['urls','required','message'=>'下载链接json不能为空','on'=>['create','update']],
            ['mid','required','message'=>'mid不能为空','on'=>['create']],

            ['updated_at','safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'did' => 'ID',
            'mid' => '名字',
            'tdid'=>'采集详情ID',
            'title' => '集数  制式 字幕下载',
            'season' => '季',
            'urls' => '下载链接json',
            'click_num' => '点击量',
            "standard"=>"制式",
            "subtitle"=>"字幕下载",
            'password' => '百度提取码',
            'size' => '大小',
            'create_time' => '发布时间',
            'update_at' => '采集时间',
        ];
    }
}
