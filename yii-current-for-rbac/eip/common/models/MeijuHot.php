<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * This is the model class for table "{{%MeijuHot}}".
 * @property integer $id
 * @property string $title_cn
 */
class MeijuHot extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%meiju_hot}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','mid'], 'integer'],
            [['title_cn','type','other'], 'safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mid' =>'MID',
            'other' =>'其他',
            'type' =>'类型',
            'title_cn' => '名字',
        ];
    }


}
