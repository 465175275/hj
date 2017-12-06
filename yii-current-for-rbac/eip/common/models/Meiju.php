<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * This is the model class for table "{{%Collection}}".
 *
 * @property integer $mid
 * @property integer $tid
 * @property string $title_en
 * @property string $title_cn
 * @property string $img
 * @property string $update_day
 * @property string $update_status
 * @property string $back_time
 * @property string $Introduction
 * @property integer $click_num
 * @property integer $subscription_num
 * @property string $url
 * @property integer $update_at
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
            [['mid', 'tid', 'click_num','subscription_num', 'update_at'], 'integer'],
            ['title_en','required','message'=>'名字不能为空','on'=>['create','update']],
            ['img','required','message'=>'主图不能为空','on'=>['create','update']],
            ['Introduction','string'],
            [['title_cn', 'title_en', 'update_status', 'update_day','type','img','back_status','back_time'], 'safe'],

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
            'title_cn' => '名字',
            'title_en' => '英文名',
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
            'update_at' => '修改时间',
        ];
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Meiju::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'mid' => $this->mid,
            'tid' => $this->tid,
        ]);
        $query->andFilterWhere(['like', 'title_cn', $this->title_cn])
              ->andFilterWhere(['like', 'title_en', $this->title_en])
              ->andFilterWhere(['like', 'type', $this->type])
              ->andFilterWhere(['like', 'update_status', $this->update_status]);
        return $dataProvider;
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

}
