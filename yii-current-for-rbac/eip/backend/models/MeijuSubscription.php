<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%meiju_click_num}}".
 *
 * @property integer $sid
 * @property integer $mid
 * @property integer $uid
 * @property integer $update_at
 */
class MeijuSubscription extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meiju_subscription}}';
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
            'sid' => 'ID',
            'uid'=>'用户ID',
            'mid' => '剧ID',
            'update_at' => '更新时间',
        ];
    }
}
