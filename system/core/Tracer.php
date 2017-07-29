<?php

/**
 * Created by PhpStorm.
 * User: ccc
 * Date: 2017/7/12 0012
 * Time: 16:57
 */
class Tracer
{
    protected $db = '';
    private $terminal = '';


    public function __construct(){
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
        if (strpos($agent, 'windows nt') || strpos($agent, 'mac os'))
            $this->terminal = 'computer';
        else
            $this->terminal = 'mobile';
    }


    /**
     * 获取Post数据
     * @param $aim mixed 要获取的post name,如果为空，则返回所有post数据
     * @param $url string 值不存在时要跳转的url连接
     * @return mixed 返回字符串或包含所有Post数据的数组
     */
    public function post($aim = '', $url = '') {
        if (empty($aim))
            return $_POST;
        elseif (!empty($_POST[$aim]))
            return $_POST[$aim];
        else
            $this->jump('skip', "请求错误，必要参数{$aim}不存在", $url);
    }


    /**
     * 获取get数据
     * @param $aim mixed 要获取的get name,如果为空，则返回所有post数据
     * @param $url string 值不存在时要跳转的url连接
     * @return mixed 返回字符串或包含所有Post数据的数组
     */
    public function get($aim = '', $url = '') {
        if (empty($aim))
            return $_GET;
        elseif (isset($_GET[$aim]))
            return $_GET[$aim];
        else
            $this->jump('skip', "请求错误，必要参数{$aim}不存在", $url);
    }


    /**
     * 加载model
     * @param $db string 要加载的模版名，（不包含Model部分）
     */
    public function database($db) {
        require_once './application/models/' . ucfirst($db) . 'Model.php';
        $db       = ucfirst($db) . 'Model';
        $this->db = new $db;
    }


    /**
     * 加载视图
     * @param $view string 要加载的界面
     * @param $data array 要传递的数据
     */
    public function view($view, $data = array()) {
        @extract($data);
        ob_end_clean();
        require_once './application/views/' . $view . '.php';
    }


    /**
     * 跳转到指定页面
     * @param $page string 要跳转到的页面
     * @param $message mixed 错误信息
     */
    public function jump($page, $message = '', $url = '') {
        ob_end_clean();
        require_once "./application/views/$this->terminal/" . $page . '.php';
        exit();
    }


}