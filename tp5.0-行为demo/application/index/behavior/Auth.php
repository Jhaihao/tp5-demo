<?php
//<修改>
namespace app\index\behavior;
use think\Controller;
class Auth {
    use \traits\controller\Jump;
    //类里面引入jump;类 可以使用跳转的一些方法 还有 success 、error

    //默认会执行run
    public function run(&$params)
    {
        var_dump($params);
        echo 'run test<br/>';        //浏览器输出顺序 ③
    }

    //如果是单行为类的话，一般行为类的执行方法是run方法。如果某个行为类包含了多个行为的话，那么行为的执行方法是对应钩子的名称
    public function appInit(&$params)
    {
        echo 'app_init test<br/>';   //浏览器输出顺序 ①
    }

    public function appBegin(&$params)
    {
        echo 'app_begin test<br/>';  //浏览器输出顺序 ②
    }

}