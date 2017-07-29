<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     *  前台页面
     */
    public function index(){
        $this->display();
    }
}