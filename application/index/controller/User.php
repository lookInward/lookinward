<?php
namespace app\index\controller;
use app\index\controller\Base;
 
class User extends Base
{
    //登录
    public function login()
    {
        return $this-view-fetch();
    }
    //验证登录
    public function checkLogin()
    {
        return $this-view-fetch();
    }
    //登出
    public function logout()
    {
        return $this-view-fetch();
    }
}