<?php
namespace app\index\controller;

use Logger\Contract\LogInterface;
use Logger\Drivers\DbDriver;
use Logger\SimpleLogger;

class Index
{
    public function index()
    {
        bind('log_driver',\Logger\Drivers\FileDriver::class);
        /** @var LogInterface $logger */
        $logger = app('logger');
        $logger->write('1');


    }


}
