<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * This is the model class for table "{{%News}}".
 * @property integer $nid
 * @property string $title_cn
 */
class News extends \yii\db\ActiveRecord
{
    public $repassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nid','tnid','click_num','update_at'], 'integer'],
            [['title','summary','content','type','img'], 'safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nid' => 'ID',
            'tnid'=>"Tid",
            'click_num' =>'点击量',
            'title' =>'标题',
            'summary' =>'摘要',
            'content' => '内容',
            'type'=>'分类',
            'img'=>'图片',
            'update_at'=>"发布时间"
        ];
    }


}
