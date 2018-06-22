<?php
echo date('Y-m-d H:i:s', 1528856942);exit;
//每隔2000ms触发一次
swoole_timer_tick(2000, function ($timer_id) {
    echo "tick-2000ms\n";
});
// 3000ms后执行此函数
swoole_timer_after ( 10000, function () {
    echo "after 3000ms.\n";
} );