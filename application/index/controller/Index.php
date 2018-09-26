<?php
namespace app\index\controller;
use app\index\controller\base;
class Index extends Base
{
    public function index()
    {
        return $this -> view -> fetch();
    }
}
