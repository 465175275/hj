<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%loginlog}}".
 *
 * @property string $id
 * @property integer $user_id
 * @property string $ip
 * @property string $created_time
 */
class Loginlog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%loginlog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'ip', 'created_time'], 'required'],
            [['user_id'], 'integer'],
            [['ip', 'created_time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'ip' => 'Ip',
            'created_time' => 'Created Time',
        ];
    }
}
