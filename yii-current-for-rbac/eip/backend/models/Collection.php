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
class Collection extends \yii\db\ActiveRecord
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
            'tid' => 'ID',
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
            "standard"=>"制式",
            "subtitle"=>"字幕下载",
            "subscription_num"=>"订阅量",
            "url"=>"采集页面链接",
            'updated_at' => '修改时间',
        ];
    }


    //搜索
    public function search($params)
    {
        $query = Collection::find();
        // $query->joinWith(['cate']);//关联文章类别表
        // $query->joinWith(['author' => function($query) { $query->from(['author' => 'users']); }]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);
        // 从参数的数据中加载过滤条件，并验证
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // 增加过滤条件来调整查询对象
        $query->andFilterWhere([
            // 'cname' => $this->cate.cname,
            'title' => $this->title,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);
        //$query->andFilterWhere(['like', 'cate.cname', $this->cname]) ;

        return $dataProvider;
    }
}
