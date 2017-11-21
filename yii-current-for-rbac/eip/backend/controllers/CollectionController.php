<?php

namespace backend\controllers;

use backend\models\Meiju;
use backend\models\MeijuDetial;
use Yii;
use backend\models\Collection;
use backend\models\UserSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * 数据采集
 */
class CollectionController extends CommonController
{


    public $host_detail = "http://www.ttmeiju.vip";
    public $host_list = "http://www.ttmeiju.vip/index.php/summary/index/p/";
    public $meiju_path = "/runtime/caiji";

    /*登录才有权限访问的方法*/
    //public $loginAction = ['index','view','create','update','delete','myinfo','mypassword', 'upuserpass'];
    /**
     * 用户列表
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        // $this-> read_caij_list();
        // $this-> file_get_caiji_last();
        $this->read_caij_list();
        //$this->save();
        /*
            $this->read_caij_detail();
            exit;
            //$this->file_get_caiji_list();
            $url="Agents.of.S.H.I.E.L.D.html";

            $detail=$this->read_caij_detail($url);
             var_dump($detail);
            //$this->curl($url);
           // $this->file_get_caiji_detail($url);*/

        return $this->render('/Collection/index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function save($url)
    {
        $meijuModel = new Meiju();
       // $url = "/meiju/THE.Walking.Dead.html";
        $data = $this->read_caij_detail($url);
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
        $meijuModel->Introduction = $data['data']["Introduction"];
        $meijuModel->click_num = 0;
        $meijuModel->url = $url;
        $meijuModel->update_at = time();
        $tr =Yii::$app->db->beginTransaction();
        try {
            if ($meijuModel->save(false)) {
                foreach ($data['detail'] as $val) {
                    $MeijuDetialModel = new MeijuDetial();
                    $MeijuDetialModel->scenario = 'create';
                    $MeijuDetialModel->mid = $meijuModel->attributes['mid'];
                    $MeijuDetialModel->title = $val['title'];
                    $MeijuDetialModel->tdid=$val['tdid'];
                    $MeijuDetialModel->season = $data['data']['season'];
                    $MeijuDetialModel->urls = json_encode($val['urls']);
                    $MeijuDetialModel->password = $val['password'];
                    $MeijuDetialModel->size = $val['size'];
                    $MeijuDetialModel->create_time = $val['create_time'];
                    $MeijuDetialModel->update_at = $meijuModel->update_at;
                    $MeijuDetialModel->save(false);
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
    function file_put($value, $url, $life = FALSE)
    {
        if ($life) {
            $a = file_put_contents($url, var_export($value, true), FILE_APPEND);
        } else {
            $a = file_put_contents($url, var_export($value, true));
        }
    }


    /**
     * 采集列表
     */
    public function file_get_caiji_list()
    {
        set_time_limit(0);
        //采集28页
        for ($i = 1; $i < 29; $i++) {
            $file = Yii::$app->getBasePath() . $this->meiju_path . "/list-{$i}.html";
            if (!is_file($file)) {
                $url = $this->host_list . $i . "html";
                $p = $this->curl($url);
                $this->file_put($p, $file);
            }

        }
    }
    /**
     * 采集最近7天的
     */
    public function file_get_caiji_last(){
        set_time_limit(0);
        //采集最近7天的
        for ($i = 0; $i < 7; $i++) {
            $date=date("Y-m-d",strtotime("-{$i} day"));
            $file = Yii::$app->getBasePath() . $this->meiju_path ."/news/{$date}.html";
            if (in_array($i,[0,1,2,3]) || !is_file($file)) {
                $url = $this->host_detail . "/latest-{$i}.html";
                $p = $this->curl($url);
                $this->file_put($p, $file);
                echo $file."--------->".$url."<br>";
            }
        }

        exit;
    }





    public function file_get_caiji_detail($url)
    {
        $file = Yii::$app->getBasePath() . $this->meiju_path . $url;
        $data = $this->curl($this->host_detail . $url);
        $this->file_put($data, $file);
    }

    /**
     * 读取下载列表
     */
    public function read_caij_list()
    {
        set_time_limit(0);
        $n=0;
        echo 'begin...<br>';
        $data = [];
        for ($i = 28; $i >0; $i--) {
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

                    if(strpos($url," ")!==false){
                        $url=str_replace(" ","%20",$url);
                    }

                    if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $url)) {
                        $this->file_get_caiji_detail($url);
                    }
                    //$data[] = $this->read_caij_detail($url);
                    echo $n."---".$url.'<br>';
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

                    if(strpos($url," ")!==false){
                        $urls=str_replace(" ","%20",$url);
                    }else{
                        $urls=$url;
                    }

                    if (!is_file(Yii::$app->getBasePath() . $this->meiju_path . $url) && !is_file(Yii::$app->getBasePath() . $this->meiju_path . $urls) ) {
                        $this->file_get_caiji_detail($urls);
                    }
                    //$data= $this->read_caij_detail($url);
                    $this->save($urls);
                    echo $n."---".$urls.'<br>';
                    $n++;
                }
            }
            echo 'end-------'.$i.'------------------------------------...<br>';

        }

    }

    /**
     * 读取下载详情
     * @param string $name
     */
    public function read_caij_detail($url = '')
    {
        $data = [];
        $detail = [];

        $files = Yii::$app->getBasePath() . $this->meiju_path . $url;

        $html = file_get_contents($files);

        //<div class="hd">权力的游戏 Game of Thrones-权力的游戏下载-权力的游戏全集下载-Game of Thrones下载</div>
        $pattern = "/<div class=\"hd\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $name);

        $name = explode("-", $name[1][0]);
        $data['title_cn'] = trim(strstr($name[0], ' '));//中文
        $data['title_en'] = strstr($name[0], ' ', true);//英文

        //<script src="/index.php/user/rss_status/mid/579.html" type="text/javascript" language="javascript"></script>
        $pattern = "/<script src=\"\/index.php\/user\/rss_status\/mid\/(.*).html\" type=\"text\/javascript\" language=\"javascript\"><\/script>/iUs";
        preg_match_all($pattern, $html, $mid);
        $data['mid'] = $mid[1][0];//天天ID

        //class="curseason" id="4">第几季
        $pattern = "/class=\"curseason\" id=\"(.*)\">/iUs";
        preg_match_all($pattern, $html, $season);
        $data['season'] = $season[1][0];

        //img.src = "	http://i1.piimg.com/588755/a97fc6a5220068f8.jpg";
        $pattern = "/img.src = \"(.*)\";/iUs";
        preg_match_all($pattern, $html, $img);
        $data['img'] = $img[1][0];
        //<span class="greybg">更新日：每周三</span>
        $pattern = "/<span class=\"greybg\">更新日：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_day);
        $data['update_day'] = $update_day[1][0];

        //<span>状态：本季终</span>
        $pattern = "/<span>状态：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_status);
        $data['update_status'] = $update_status[1][0];

        //<span class="greybg">分类：科幻类</span>
        $pattern = "/<span class=\"greybg\">分类：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $type);
        $data['type'] = $type[1][0];

        //<span>最后更新：2017-05-20 00:36</span>
        $pattern = "/<span>最后更新：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $update_time);
        $data['update_time'] = strtotime($update_time[1][0]);

        //<span class="greybg">回归：暂无</span>
        $pattern = "/<span class=\"greybg\">回归：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $back_status);
        $data['back_status'] = trim($back_status[1][0]);

        //<span>倒计时：暂无</span>
        $pattern = "/<span>倒计时：(.*)<\/span>/iUs";
        preg_match_all($pattern, $html, $back_time);
        $data['back_time'] = trim($back_time[1][0]);

        $pattern = "/<div class=\"newstxt\">(.*)<\/div>/iUs";
        preg_match_all($pattern, $html, $Introduction);
        $data['Introduction'] = trim($Introduction[1][0]);


        $pattern = "/<tr class=\"Scontent1\" >(.*)<\/tr>/iUs";
        preg_match_all($pattern, $html, $arr);//匹配内容到arr数组
        //$this->file_put($arr[0][0],"Scontent1.html");
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
            $row['title'] = strstr($string[2][0], 'S0');//集数  制式 字幕下载

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

}
