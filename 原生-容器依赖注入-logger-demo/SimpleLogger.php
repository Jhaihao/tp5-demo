<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/25
 * Time: 15:52
 */

class SimpleLogger implements LogInterface
{

    private $driver;

    public function __construct(DriverInterface $driver)
    {
       $this->driver = $driver;
    }


    /**
     * @param string $content
     */
    public function write(string $content)
    {
        $this->driver->driveWrite($content);
    }
}