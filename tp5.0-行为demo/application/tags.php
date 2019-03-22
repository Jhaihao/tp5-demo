<?php
//<修改>
//某个行为类包含了多个行为
return [
    // 应用初始化
    'app_init'     => [
        'app\index\behavior\Auth'
    ],
    // 应用开始
    'app_begin'    => [
        'app\index\behavior\Auth'
    ],
    // 模块初始化
    'module_init'  => [],
    // 操作开始执行
    'action_begin' => [],
    // 视图内容过滤
    'view_filter'  => [],
    // 日志写入
    'log_write'    => [],
    // 应用结束
    'app_end'      => [],

    'login'     => [
        'app\index\behavior\Auth'
        //某个行为类包含了单个行为的话 只需写这里就可以 app_init,app_begin 不需要填写app\index\behavior\Auth
    ],
];


