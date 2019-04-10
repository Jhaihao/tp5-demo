<?php
namespace app\index\controller;

use think\facade\Hook;
//<修改>
class Index
{
    public function index()
    {
        $a = 0 ;
        Hook::listen('login', $a);
    }


}
