<?php
require_once('quequ.conf.php');
require_once('redis.class.php');

$k = $_GET['key'];
$v = $_GET['value'];
$config = array(
	'server' => '127.0.0.1', //地址
	'port'   => '6379' //端口号
);
$redis = new redisInit();
$redis->init($config);

$push = $redis->push($k,$v);

if($push) echo '入队列成功';
