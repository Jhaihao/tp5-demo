<?php


interface LogInterface
{

    /**
     * @param string $content
     * @return mixed
     */
    public function write(string $content);
}