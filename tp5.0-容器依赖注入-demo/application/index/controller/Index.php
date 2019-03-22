<?php

namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {

//        $superModule = new XPower();
//        $newModule = new APower();
//
//        // 初始化一个超人，并注入一个超能力模组依赖
//        $superMan = new Superman($newModule);
//        // $superMan->activate();
//        $superMan->act();


        $container = new Container;
        // 向该 超级工厂 添加 超人 的生产脚本
        $container->bind('superman', function ($container, $moduleName) {
            return new Superman($container->make($moduleName));
        });
// 向该 超级工厂 添加 超能力模组 的生产脚本
        $container->bind('xpower', function ($container) {
            return new XPower();
        });

// 同上

        // ******************  华丽丽的分割线  **********************
// 开始启动生产
        /** @var Superman $superman_1 */
        $superman_1 = $container->make('superman', ['xpower']);
        $superman_1->act();
//        $superman_2 = $container->make('superman', ['ultrabomb']);
//        $superman_3 = $container->make('superman', ['xpower']);

    }


}
