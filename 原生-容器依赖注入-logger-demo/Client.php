<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/25
 * Time: 15:32
 */

class Client
{
    public function __construct()
    {
        $this->container = new Container();
        $this->container->bind('log', function ($container, $moduleName) {
            return new SimpleLogger($this->container->make($moduleName));
        });

        $this->container->bind('DbDriver', function ($container) {
            return new DbDriver();
        });
        $this->container->bind('FileDriver', function ($container) {
            return new FileDriver();
        });

    }
    public function index(){
        /** @var LogInterface $logger */
        $logger =  $this->container->make('log', ['DbDriver']);
        $logger->write('msg'); //写日志

    }

}