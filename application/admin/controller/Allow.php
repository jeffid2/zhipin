<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller;
use think\Controller;
//导入Db
use think\Db;
use think\Session;
class Allow extends Controller{
    //初始化方法
    public function _initialize(){
        //检测用户的登录的Session信息是否存在
        if(!Session::get("islogin")){
            //跳转后台登录界面
            $this->error("请先登录","/login/login");
        }
//        4.检测权限
//        $request=request();
//        //获取当前用户访问模块的控制器 和方法
//        $controller=strtolower($request->controller());
//        $action=$request->action();
////         echo $controller.":".$action;
//        //获取当前登录用户的权限信息
//        $nodelist=Session::get("nodelist");
//        if(empty($nodelist[$controller])||!in_array($action,$nodelist[$controller])){
//            $this->error("sorry,您没有权限访问该模块,请联系超级管理员","/admin/index");
//        }
    }
    
}
?>