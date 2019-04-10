<?php

namespace app\http\middleware;
//<修改>
// 可以通过命令生成
// php think make:middleware Check
class Auth
{
    public function handle($request, \Closure $next)
    {
        echo '123';
        var_dump($request);
        return $next($request);

    }
}
