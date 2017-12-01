<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%meiju_click_num}}".
 *
 * @property integer $cid
 * @property integer $day
 * @property integer $click_num
 * @property integer $mid
 * @property integer $did
 * @property integer $update_at
 */
class MeijuClickNum extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meiju_click_num}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cid' => 'ID',
            'day' => '日期',
            'click_num'=>'点击量',
            'mid' => '剧ID',
            'did' => '下载链接json',
            'update_at' => '更新时间',
        ];
    }
}
