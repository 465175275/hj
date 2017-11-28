<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
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
            [['mid','season', 'tdid','title','standard','subtitle'], 'safe'],

        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'did' => 'ID',
            'mid' => '剧ID',
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


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MeijuDetial::find();

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
            'tdid' => $this->tdid,
            'season'=>$this->season,
        ]);
        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'standard', $this->standard])
            ->andFilterWhere(['like', 'subtitle', $this->subtitle]);
        return $dataProvider;
    }
}
