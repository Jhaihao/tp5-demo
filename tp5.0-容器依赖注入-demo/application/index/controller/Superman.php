<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/22
 * Time: 12:03
 */

namespace app\index\controller;


class Superman
{
    protected $module;

    public function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }


    public function act(){
        $this->module->activate([]);
    }

}