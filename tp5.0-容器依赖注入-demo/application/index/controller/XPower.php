<?php
namespace app\index\controller;

/**
 * X-超能量
 */
class XPower implements SuperModuleInterface
{
    public function activate(array $target)
    {
        echo 'XPower';
    }

}