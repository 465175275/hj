<?php

namespace backend\controllers;

use common\models\Meiju;
use common\models\MeijuDetial;
use common\models\MeijuHot;
use common\models\News;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * 数据采集
 */
class CollectionController extends CommonController
{

    public $enableCsrfValidation = false;
    public $host_detail = "http://www.ttmeiju.vip";
    public $host_list = "http://www.ttmeiju.vip/index.php/summary/index/p/";
    public $meiju_path = "/runtime/caiji";

    /*登录才有权限访问的方法*/
    //public $loginAction = ['index','view','create','update','delete','myinfo','mypassword', 'upuserpass'];
    /**
     * 列表
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new Meiju();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }

    /**
     * 详情列表
     * @return mixed
     */
    public function actionMeijuList()
    {

        $mid = Yii::$app->request->get("mid");
        $searchModel = new MeijuDetial();
        if ($mid) {
            Yii::$app->request->setQueryParams(array_merge(Yii::$app->request->queryParams, ['MeijuDetial' => ['mid' => $mid]]));
        }
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('meijuList', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }


    /**
     * 采集最新
     */
    public function actionCaijiNews()
    {
        $date=date("Y-m-d");
        $file = Yii::$app->getBasePath() . $this->meiju_path . "/news/{$date}.html";
        $file_log = Yii::$app->getBasePath() . $this->meiju_path . "/crontab.log";
        $this->file_put(date("Y-m-d H:i:s")."\n",$file_log,true);
        if(is_file($file)){
            echo "今天已经采集过了";exit;
        }

        $this->file_get_caiji_last();
        echo "采集成功";exit;
        //return $this->redirect(['view']);
    }

    /**
     * 修改
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mid
     * @return mixed
     */
    public function actionUpdate($mid)
    {
        $model = $this->findModel($mid);
        /*声明场景*/
        $model->scenario = 'update';

        $auth = Yii::$app->authManager;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            /*获取数据*/
            $model->update_at = time();
            if ($model->save(false)) {
                Yii::$app->session->setFlash('info', '修改成功');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', '修改失败');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * 新增
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mid
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Meiju();

        /*声明场景*/
        $model->scenario = 'create';
        $model->update_at = time();
        $model->update_time = time();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            if ($model->save(false)) {
                Yii::$app->session->setFlash('info', '创建成功');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', '创建失败');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
                'roles' => \backend\models\Rbac::getRoles(),
            ]);
        }
    }


    /**
     * 修改
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mid
     * @return mixed
     */
    public function actionUpdateDetail($did)
    {
        $model = $this->findDModel($did);
        /*声明场景*/
        $model->scenario = 'update';

        $auth = Yii::$app->authManager;

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            /*获取数据*/
            $post = Yii::$app->request->post();
            $model->update_at = time();
            if ($model->save(false)) {
                Yii::$app->session->setFlash('info', '修改成功');
                return $this->redirect(['meiju-list', 'mid' => $model->mid]);
            } else {
                Yii::$app->session->setFlash('error', '修改失败');
                return $this->redirect(['update-detail']);
            }
        } else {
            return $this->render('updateDetail', [
                'model' => $model,
            ]);
        }
    }

    /**
     * 新增详情
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $mid
     * @return mixed
     */
    public function actionCreateDetail()
    {
        $model = new MeijuDetial();

        /*声明场景*/
        $model->scenario = 'create';

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->update_at = time();
            if ($model->save(false)) {
                Yii::$app->session->setFlash('info', '创建成功');
                return $this->redirect(['index']);
            } else {
                Yii::$app->session->setFlash('error', '创建失败');
                return $this->redirect(['index']);
            }
        } else {
            return $this->render('createDetail', [
                'model' => $model,
                'roles' => \backend\models\Rbac::getRoles(),
            ]);
        }
    }


    /**
     * 删除meiju
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($mid)
    {
        $this->findModel($mid)->delete();

        return $this->redirect(['index']);
    }

    /**
     * 删除meiju
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $did
     * @return mixed
     */
    public function actionDeleteDetail($did)
    {
        $this->findDModel($did)->delete();

        return $this->redirect(['index']);
    }


    /*
     * 列表采集
     */
    public function actionCaijiList()
    {
        //$this->read_caij_list();
    }


    /**
     * 采集数据并且保存数据到文件
     * @param string $url
     */
    public function curl($url)
    {
        // 初始化一个 cURL 对象
        $curl = curl_init();

        // 设置你需要抓取的URL
        curl_setopt($curl, CURLOPT_URL, $url);

        // 设置header
        curl_setopt($curl, CURLOPT_HEADER, 1);

        // 设置cURL 参数，要求结果保存到字符串中还是输出到屏幕上。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // 运行cURL，请求网页
        $data = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($httpCode == 404) {
            return false;
        }
        // 关闭URL请求
        curl_close($curl);
        return $data;
    }


    /**
     * 写入文件
     * @param $value
     * @param $url
     * @param bool $life
     */
    public function file_put($value, $url, $life = FALSE)
    {
        if ($life) {
            $a = file_put_contents($url, var_export($value, true), FILE_APPEND);
        } else {
            $a = file_put_contents($url, var_export($value, true));
        }
    }

    /**
     * 采集保存入库
     * @param $url
     * @return bool
     */
    private function save($url)
    {
        $meijuModel = new Meiju();
        $data = $this->read_caij_detail($url);
        if (!$data || $meijuModel->findOne(['tid' => $data['data']["mid"]])) {
            return true;
        }
        /*实例化authManager类*/
        $meijuModel->scenario = 'create';
        /*获取role的类*/
        $meijuModel->tid = $data['data']["mid"];
        $meijuModel->title_en = $data['data']["title_en"];
        $meijuModel->title_cn = $data['data']["title_cn"];
        $meijuModel->update_day = $data['data']["update_day"];
        $meijuModel->update_status = $data['data']["update_status"];
        $meijuModel->update_time = $data['data']["update_time"];
        $meijuModel->back_status = $data['data']["back_status"];
        $meijuModel->back_time = $data['data']["back_time"];
        $meijuModel->img = $data['data']["img"];
        $meijuModel->subscription_num = $data['data']['subscription_num'];
        $meijuModel->type = $data['data']["type"];
        $meijuModel->Introduction = $data['data']["Introduction"];
        $meijuModel->click_num = 0;
        $meijuModel->url = $url;
        $meijuModel->update_at = time();
        $r = [];
        $tr = Yii::$app->db->beginTransaction();
        try {
            if ($meijuModel->save(false)) {
                $mid = Yii::$app->db->getLastInsertID();
                foreach ($data['detail'] as $val) {
                    $MeijuDetialModel = new MeijuDetial();
                    $MeijuDetialModel->scenario = 'create';
                    $MeijuDetialModel->mid = $mid;
                    $MeijuDetialModel->title = $val['title'];
                    $MeijuDetialModel->tdid = $val['tdid'];
                    $MeijuDetialModel->season = intval($data['data']['season']);
                    $MeijuDetialModel->urls = json_encode($val['urls']);
                    $MeijuDetialModel->password = $val['password'];
                    $MeijuDetialModel->size = $val['size'];
                    $MeijuDetialModel->subtitle = $val['subtitle'];
                    $MeijuDetialModel->standard = $val['standard'];
                    $MeijuDetialModel->create_time = $val['create_time'];
                    $MeijuDetialModel->update_at = $meijuModel->update_at;
                    $r[] = $MeijuDetialModel->save(false);
                }
                if (in_array(false, $r)) {
                    throw new \Exception();
                }
                $tr->commit();
                return true;
            } else {
                throw new \Exception();
            }
        } catch (\Exception $e) {

            $tr->rollBack();
            return false;
        }
    }

    /**
     * 采集列表
     */
    private function file_get_caiji_list()
    {
        set_time_limit(0);
        //采集28页
        for ($i = 1; $i < 29; $i++) {
            $file = Yii::$app->getBasePath() . $this->meiju_path . "/list-{$i}.html";
            if (!is_file($file)) {
                $url = $this->host_list . $i . "html";
                $p = $this->curl($url);
                $p != false && $this->file_put($p, $file);
            }

        }
    }

    /**
     * 采集最近7天的
     */
    private function file_get_caiji_last()
    {
        set_time_limit(0);
        //采集最近2天的
                for ($i = 0; $i < 3; $i++) {
                    $date = date("Y-m-d", strtotime("-{$i} day"));
                    $file = Yii::$app->getBasePath() . $this->meiju_path . "/news/{$date}.html";
                                if (in_array($i,[0,1,2,3]) || !is_file($file)) {
                                    $url = $this->host_detail . "/latest-{$i}.html";
                                    $p = $this->curl($url);
                                    $p!=false && $this->file_put($p, $file);
                                    echo $file."--------->".$url."<br>";
                                }
                    if(is_file($file)){
                        $this->saveLast($file);
                    }

                }

        //采集影评资讯
        $file = Yii::$app->getBasePath() . $this->meiju_path . "/index-." . date("Ymd") . ".html";
        if (!is_file($file)) {
            $html = $this->curl($this->host_detail);
            $html != false && $this->file_put($html, $file);
        }
        if (is_file($file)) {
            $this->saveIndex($file);
        }
    }


    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mid
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($mid)
    {
        if (($model = Meiju::findOne($mid)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $mid
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findDModel($did)
    {
        if (($model = MeijuDetial::findOne($did)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


    private function file_get_caiji_detail($url)
    {
        $file = Yii::$app->getBasePath() . $this->meiju_path . $url;
        $data = $this->curl($this->host_detail . $url);
        $data != false && $this->file_put($data, $file);
    }

    /**
     * 读取下载列表
     */
    private function read_caij_list()
    {
        set_time_limit(0);
        $n = 0;
        echo 'begin...<br>';
        $data = [];
        for ($i = 1; $i < 29; $i++) {
            $file = Yii::$app->getBasePath() . $this->meiju_path . "/list-{$i}.html";
            if (!is_file($file)) {
                $url = $this->host_list . $i . "html";
                $p = $this->curl($url);
                $this->file_put($p, $file);
            }

            $html = file_get_contents($file);
            //1-2-3
            $pattern = "/<div class=\"mjtit\">(.*)<\/div>/iUs";
            preg_match_all($pattern, $html, $string);
            if (isset($string[1])) {
                foreach ($string[1] as $val) {
                    $pattern = "/href=\"(.*)\">/iUs";
                    preg_match_all($pattern, $val, $url);
                    $url = $url[1][0];

                    if (strpos($url, " ") !== false) {
                        $urls = str_replace(" ", "%20", $url);
                    } else {
                        $urls = $url;
                    }

                    if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $urls)) {
                        $this->file_get_caiji_detail($urls);
                    }
                    //$data[] = $this->read_caij_detail($url);
                    $this->save($urls);
                    echo $n . "---" . $url . '<br>';
                    $n++;
                }
            }

            $pattern = "/<td align=\"left\">(.*)<\/td/iUs";
            preg_match_all($pattern, $html, $string);
            if (isset($string[1])) {
                foreach ($string[1] as $val) {
                    if ($val == "剧名") {
                        continue;
                    }
                    $pattern = "/href=\"(.*)\" >/iUs";
                    preg_match_all($pattern, $val, $url);
                    $url = $url[1][0];
                    if ($url == "/meiju/Movie.html" || $url == '/meiju/Documentary.html' || $url == "/meiju/BBC.Channel.html") {
                        continue;
                    }

                    if (strpos($url, " ") !== false) {
                        $urls = str_replace(" ", "%20", $url);
                    } else {
                        $urls = $url;
                    }

                    if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $url) && !is_file(Yii::$app->getBasePath() . $this->meiju_path . $urls)) {
                        $this->file_get_caiji_detail($urls);
                    }
                    //$data= $this->read_caij_detail($url);
                    $this->save($urls);
                    echo $n . "---" . $urls . '<br>';
                    $n++;
                }
            }
            echo 'end-------' . $i . '------------------------------------...<br>';

        }

    }

    /**
     * 读取下载详情
     * @param string $name
     */
    private function read_caij_detail($url = '')
    {
        $data = [];
        $detail = [];
        $files = Yii::$app->getBasePath() . $this->meiju_path . $url;
        $html = file_get_contents($files);

        //<div class="hd">权力的游戏 Game of Thrones-权力的游戏下载-权力的游戏全集下载-Game of Thrones下载</div>
        $pattern = "/<div class=\"hd\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $name);

        $name = $name && isset($name[1][0]) ? explode("-", $name[1][0]) : '';
        $data['title_en'] = isset($name[0]) ? trim(strstr($name[0], ' ')) : '';//中文
        $data['title_cn'] = isset($name[0]) ? strstr($name[0], ' ', true) : '';//英文

        //<script src="/index.php/user/rss_status/mid/579.html" type="text/javascript" language="javascript"></script>
        $pattern = "/<script src=\"\/index.php\/user\/rss_status\/mid\/(.*).html\" type=\"text\/javascript\" language=\"javascript\"><\/script>/iUs";
        preg_match_all($pattern, $html, $mid);
        $data['mid'] = $mid && isset($mid[1][0]) ? $mid[1][0] : '';//天天ID
        if (!$data['mid']) {
            return false;
        }

        //class="curseason" id="4">第几季
        $pattern = "/class=\"curseason\" id=\"(.*)\">/iUs";
        preg_match_all($pattern, $html, $season);
        $data['season'] = $season && isset($season[1][0]) ? $season[1][0] : '';

        //img.src = "	http://i1.piimg.com/588755/a97fc6a5220068f8.jpg";
        $pattern = "/img.src = \"(.*)\";/iUs";
        preg_match_all($pattern, $html, $img);
        $data['img'] = $img && isset($img[1][0]) ? $img[1][0] : "";
        //<span class="greybg">更新日：每周三</span>
        $pattern = "/<span class=\"greybg\">更新日：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_day);
        $data['update_day'] = $update_day && isset($update_day[1][0]) ? $update_day[1][0] : "";

        //<span>状态：本季终</span>
        $pattern = "/<span>状态：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_status);
        $data['update_status'] = $update_status && isset($update_status[1][0]) ? $update_status[1][0] : '';

        //<span class="greybg">分类：科幻类</span>
        $pattern = "/<span class=\"greybg\">分类：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $type);
        $data['type'] = $type && isset($type[1][0]) ? $type[1][0] : '';

        //<span>最后更新：2017-05-20 00:36</span>
        $pattern = "/<span>最后更新：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_time);
        $data['update_time'] = $update_time && isset($update_time[1][0]) ? strtotime($update_time[1][0]) : '';

        //<span class="greybg">回归：暂无</span>
        $pattern = "/<span class=\"greybg\">回归：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $back_status);
        $data['back_status'] = $back_status && isset($back_status[1][0]) ? trim($back_status[1][0]) : '';

        //<span>倒计时：暂无</span>
        $pattern = "/<span>倒计时：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $back_time);
        $data['back_time'] = $back_time && isset($back_time[1][0]) ? trim($back_time[1][0]) : '';

        $pattern = "/<div class=\"newstxt\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $Introduction);
        $data['Introduction'] = $Introduction && isset($Introduction[1][0]) ? trim($Introduction[1][0]) : '';


        $pattern = "/已有<font color=\"red\">(.*)<\/font>人关注/iUs";
        preg_match_all($pattern, $html, $subscription_num);
        $data['subscription_num'] = $subscription_num && isset($subscription_num[1][0]) ? trim($subscription_num[1][0]) : '';

        $pattern = "/<tr class=\"Scontent1\" >(.*)<\/tr>/iUs";
        preg_match_all($pattern, $html, $arr);//匹配内容到arr数组
        //$this->file_put($arr[0][0],"Scontent1.html");
        $arr[0] = isset($arr[0]) ? $arr[0] : [];
        foreach ($arr[0] as $attr_str) {
            $row = [];
            //集数  制式 字幕下载
            $pattern = "/<td>(.*)<\/td>/iUs";
            preg_match_all($pattern, $attr_str, $td);
            //var_dump($td[1][0]);exit;
            $row['password'] = $td[1][1];//提取码
            $row['size'] = $td[1][2];//大小
            $row['create_time'] = $td[1][5];
            $row['standard'] = $td[1][3];//制式
            $row['subtitle'] = $td[1][4];//字幕下载

            // <input value="91169" type="checkbox">
            $pattern = "/<input value=\"(.*)\" type=\"checkbox\">/iUs";
            preg_match_all($pattern, $td[1][0], $tdid);
            $row['tdid'] = $tdid[1][0];//详情ID
            //集数 制式 字幕下载
            $pattern = "/<a href=\"\/seed\/([0-9]+).html\">(.*)<\/a>/iUs";
            preg_match_all($pattern, $attr_str, $string);
            $pattern = "/S[0-9]{2}E[0-9]{2}/iUs";
            isset($string[2][0]) && preg_match_all($pattern, $string[2][0], $title);
            $row['title'] = isset($title[0][0]) ? strstr($string[2][0], $title[0][0]) : $string[2][0];//集数  制式 字幕下载
            //下载链接
            $pattern = "/style=\"display:none;\" href=\"(.*) rel=\"nofollow\"/iUs";
            preg_match_all($pattern, $attr_str, $urls);
            $urls = $urls[1];

            foreach ($urls as $k => $val) {
                if (strpos($val, "pan.baidu.com") !== false) {
                    $urls['baidu'] = $val;
                } elseif (strpos($val, "ed2k:") !== false) {
                    if (!isset($urls['ed2k'])) {
                        $urls['ed2k'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "magnet:") !== false) {
                    if (!isset($urls['magnet'])) {
                        $urls['magnet'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "rarbg.to") !== false || strpos($val, ".torrent") !== false) {
                    if (!isset($urls['bt'])) {
                        $urls['bt'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "acfun.tv") !== false) {
                    $urls['tv'] = $val;
                } else {
                    $urls['other'] = $val;
                }
                unset($urls[$k]);
            }

            $row['urls'] = $urls;

            $detail[] = $row;
        }

        return ['data' => $data, 'detail' => $detail];

    }


    private function read_caiji_last($url = '')
    {
        $html = file_get_contents($url);
        $data = [];
        $pattern = "/<tr class=\"Scontent1\"
                    >(.*)<\/tr>/iUs";
        preg_match_all($pattern, $html, $arr1);//匹配内容到arr数组
        $pattern = "/<tr class=\"Scontent\">(.*)<\/tr>/iUs";
        preg_match_all($pattern, $html, $arr);//匹配内容到arr数组
        $arr = array_merge($arr[0], $arr1[0]);
        foreach ($arr as $val) {
            $row = [];
            //集数  制式 字幕下载
            $pattern = "/<td>(.*)<\/td>/iUs";
            preg_match_all($pattern, $val, $td);
            $row['password'] = $td[1][1];//提取码
            $row['size'] = $td[1][2];//大小
            $row['standard'] = $td[1][3];//制式
            $row['subtitle'] = $td[1][4];//字幕下载

            $pattern = "/href=\"(.*)\"/iUs";
            preg_match_all($pattern, $td[1][0], $href);//匹配内容到arr数组
            $row['href'] = isset($href[1][0]) ? $href[1][0] : '';

            //href="/seed/93111.html"
            $pattern = "/seed\/(.*).html/iUs";
            preg_match_all($pattern, $val, $tdid);//匹配内容到arr数组
            $row['tdid'] = $tdid[1][0];
            //title="死亡半径 Radius 2017 1080p WEB-DL Orange字幕组 "
            $pattern = "/title=\"(.*)\"/iUs";
            preg_match_all($pattern, $td[1][0], $title);//匹配内容到arr数组

            $pattern = "/S[0-9]{2}E/iUs";
            preg_match_all($pattern, $title[1][0], $name);//匹配内容到arr数组
            if (isset($name[0][0])) {
                $pattern = "/S(.*)E/iUs";
                preg_match_all($pattern, $name[0][0], $season);//匹配内容到arr数组
                $row['season'] = $season[1][0];
                $row['title'] = strstr($title[1][0], $name[0][0]);
                $name = explode(' ', strstr($title[1][0], $name[0][0], true));
                $row['name'] = $name[0];
            } else if ($row['href'] == "/meiju/Movie.html") {
                $row['title'] = $title[1][0];
                $row['season'] = 0;
                $row['name'] = '高清电影';
            } else if ($row['href'] == "/meiju/Documentary.html") {
                $row['title'] = $title[1][0];
                $row['season'] = 0;
                $row['name'] = '纪录片频道';
            } else {
                $row['name'] = explode(" ", $title[1][0])[0];
                $row['title'] = $title[1][0];
                $row['season'] = 0;
            }


            //下载链接
            //style="display:none;" href=\'https://pan.baidu.com/s/1hr7fL0C\' target="_blank" rel="nofollow"
            $pattern = "/<a style=\"display:none;\" href=(.*) rel=\"nofollow\"/iUs";
            preg_match_all($pattern, $val, $urls);
            $urls = $urls[1];

            foreach ($urls as $k => $val) {
                if (strpos($val, "pan.baidu.com") !== false) {
                    $urls['baidu'] = $val;
                } elseif (strpos($val, "ed2k:") !== false) {
                    if (!isset($urls['ed2k'])) {
                        $urls['ed2k'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "magnet:") !== false) {
                    if (!isset($urls['magnet'])) {
                        $urls['magnet'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "rarbg.to") !== false || strpos($val, ".torrent") !== false) {
                    if (!isset($urls['bt'])) {
                        $urls['bt'] = $val;
                    } else {
                        $urls['miwifi'] = "http://d.miwifi.com/d2r/?url=" . base64_encode($val);
                    }
                } elseif (strpos($val, "acfun.tv") !== false) {
                    $urls['tv'] = $val;
                } else {
                    $urls['other'] = $val;
                }
                unset($urls[$k]);
            }

            $row['urls'] = $urls;


            $data[] = $row;
        }

        return $data;
    }


    private function saveLast($url = '')
    {
        $data = $this->read_caiji_last($url);
        $MeijuDetial = new MeijuDetial();
        $Meiju = new Meiju();
        $rs = $ids = [];
        foreach ($data as $val) {
            $meijus = $Meiju->find()->andFilterWhere(['title_cn' => $val['name']])->one();
            if (!$meijus) {
                $meijus = $Meiju->find()->andFilterWhere(['url' => $val['href']])->one();
            }
            if ($meijus) {
                $detials = $MeijuDetial->find()->andFilterWhere(['tdid' => $val['tdid']])->one();
                if ($detials) {
                    $detials->password = $val['password'];
                    $detials->urls = json_encode($val['urls']);
                    $detials->size = $val['size'];
                    $detials->season = $val['season'];
                    $detials->subtitle = $val['subtitle'];
                    $detials->standard = $val['standard'];
                    $rs[] = $detials->save(false);
                } else {
                    $MeijuDetial = new MeijuDetial();
                    $MeijuDetial->scenario = 'create';
                    $MeijuDetial->mid = $meijus->mid;
                    $MeijuDetial->title = $val['title'];
                    $MeijuDetial->tdid = $val['tdid'];
                    $MeijuDetial->season = $val['season'];
                    $MeijuDetial->urls = json_encode($val['urls']);
                    $MeijuDetial->password = $val['password'];
                    $MeijuDetial->size = $val['size'];
                    $MeijuDetial->subtitle = $val['subtitle'];
                    $MeijuDetial->standard = $val['standard'];
                    $MeijuDetial->create_time = date("Y-m-d");
                    $MeijuDetial->update_at = time();
                    $rs[] = $MeijuDetial->save(false);
                    $ids[] = Yii::$app->db->getLastInsertID();
                }
                $meijus->update_time = time();
                $meijus->save(false);
            } else {
                //重新下载
                if (strpos($val['href'], " ") !== false) {
                    $urls = str_replace(" ", "%20", $val['href']);
                } else {
                    $urls = $val['href'];
                }
                //var_dump($val['name']);
                // var_dump($urls = $val['href']);
                // exit;
                //var_dump(Yii::$app->getBasePath() . $this->meiju_path . $urls);exit;

                if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $urls)) {
                    $this->file_get_caiji_detail($urls);
                    if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $urls)) {
                        if (strpos($val['href'], "%20") !== false) {
                            $urls = str_replace("%20", ".", $val['href']);
                        }
                    }

                }
                $rs[] = $r = $this->save($urls);

            }

            if (in_array(false, $rs)) {
                echo $val['name'];
                var_dump($val);
                exit;
            }
        }

        echo "完成！<br>";
        var_dump($rs);
        echo "<br>";
        var_dump($ids);

    }


    /**
     * 采集影评
     * @param string $url
     */
    private function saveIndex($url = '')
    {
        $html = file_get_contents($url);
        //<label class="cnname"><a target="_blank" href="/meiju/Agents.of.S.H.I.E.L.D.html">神盾局特工</a></label>
        $pattern = "/<label class=\"cnname\"><a target=\"_blank\" href=\"\/meiju\/(.*).html\">(.*)<\/a><\/label>/iUs";
        preg_match_all($pattern, $html, $arr1);

        $pattern = "/<a target=\"_blank\" href=\"\/seed\/(.*).html\">(.*)<\/a>
                          <span class=\"dwsum\">下载量:(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $arr2);

        $i = 1;
        if (isset($arr1[2])) {
            MeijuHot::deleteAll();//清空
            $meiju = new Meiju();
            foreach ($arr1[2] as $k => $value) {
                if ($k > 0 && $k % 2 == 1) {
                    $meijuHot = new MeijuHot();
                    $meijuHot->scenario = 'create';
                    $meijuHot->id = $i;
                    $meijuHot->title_cn = $value;
                    $row = $meiju->find()->select(['mid'])->where(['title_cn' => $value])->one();
                    $meijuHot->mid = $row ? intval($row->mid) : 0;
                    $meijuHot->type = 'hot';
                    $meijuHot->other = '';
                    $meijuHot->save(false);
                    $i++;
                }
            }
        }

        $pattern = "/\/article-(.*).html/iUs";
        preg_match_all($pattern, $html, $arr4);
        $pattern = "/<div class=\"yplitit\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $arr5);
        $pattern = "/<div class=\"ypinfo\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $arr6);
        $pattern = "/href=\"\/article-[0-9]+.html\"><img src=\"(.*)\" alt/iUs";
        preg_match_all($pattern, $html, $img);
        if (isset($arr4[1]) && isset($arr5[1]) && isset($arr6[1]) && isset($img[1])) {
            foreach ($arr4[1] as $key => $value) {
                $news = new News();
                $row = $news->find()->where(['tnid' => $value])->count();
                if ($row) {
                    continue;
                }

                $file = Yii::$app->getBasePath() . $this->meiju_path . "/news/news-" . $value . ".html";
                if (!is_file($file)) {
                    $url = $this->host_detail . $arr4[0][$key];
                    $new_html = $this->curl($url);
                    $new_html != false && $this->file_put($new_html, $file);
                } else {
                    $new_html = file_get_contents($file);
                }

                $pattern = "/<div class=\"articlecontent\" style=\"overflow: hidden;\">(.*)<\/div>/iUs";
                preg_match_all($pattern, $new_html, $arr7);
                $content = isset($arr7[1][0]) ? str_replace('http://i1.cfimg.com/588755/c52dca44b06a7e66.jpg', '', $arr7[1][0]) : '';
                $news->scenario = 'create';
                $news->tnid = $value;
                $news->title = $arr5[1][$key];
                $news->summary = $arr6[1][$key];
                $news->content = $content;
                $pattern = "/<div class=\"viewico\" style=\"margin-left:10px;\"><\/div><span>(.*)次<\/span>/iUs";
                preg_match_all($pattern, $new_html, $arr8);
                $news->click_num = isset($arr8[1][0]) ? $arr8[1][0] : 0;
                $pattern = "/<div class=\"yingping\">(.*)<\/div>/iUs";
                preg_match_all($pattern, $new_html, $arr9);
                $news->type = isset($arr9[1][0]) ? $arr9[1][0] : '';
                $news->update_at = time();

                $news->img =$img[1][$key];
                $news->save(false);
            }
        }


        if (isset($arr2[1]) && isset($arr2[2]) && isset($arr2[3])) {
            $meijuDetial = new MeijuDetial();
            foreach ($arr2[1] as $k => $value) {

                $row = $meijuDetial->find()->select(['did'])->where(['tdid' => intval($value)])->one();
                if(!isset($row->did)){
                    continue;
                }
                $meijuHot = new MeijuHot();
                $meijuHot->scenario = 'create';
                $meijuHot->id = $i;
                $meijuHot->title_cn = $arr2[2][$k];
                $meijuHot->other = $arr2[3][$k];
                $meijuHot->mid = $row->did;
                $meijuHot->type = 'down';
                $meijuHot->save(false);
                $i++;
            }
        }

        exit;
    }

}
