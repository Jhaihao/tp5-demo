<?php
namespace app\index\controller;


//<修改>
class Index
{
    public function index()
    {
       echo '输出这句话之前会执行中间件'; //namespace app\http\middleware\Auth;
    }


}
