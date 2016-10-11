<meta http-equiv="Content-Language" content="utf-8" />
<?php

$make_order_url = 'push_queue.php?key=order&value=make_order';
$down_order_url = 'push_queue.php?key=order&value=down_order';

echo '<a href="',$make_order_url,'">下单</a>';
echo '<br>';
echo '<a href="',$down_order_url,'">下载订单列表</a>';