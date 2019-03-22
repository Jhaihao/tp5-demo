<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/22
 * Time: 13:02
 */

namespace app\index\controller;


class APower implements SuperModuleInterface
{

    /**
     * APower constructor.
     */
    public function __construct()
    {
    }

    /**
     * 超能力激活方法
     *
     * 任何一个超能力都得有该方法，并拥有一个参数
     * @param array $target 针对目标，可以是一个或多个，自己或他人
     */
    public function activate(array $target)
    {
        // TODO: Implement activate() method.
    }
}