<?php
 $arr = require_once('quequ.conf.php');
require_once('redis.class.php');

$k = 'order';

$config = array(
	'server' => '127.0.0.1', //������
	'port'   => '6379' //�˿ں�
);
$redis = new redisInit();
$redis->init($config);

$classname = $arr[$k]['className'];
if(!empty($classname)){
	$class_name = $classname.'.class.php';
	require_once($class_name);
	$pop = $redis->pop($k);
	if(!empty($pop)){
		$method = $arr[$k]['items'][$pop]['method'];
		$k = new $classname();
		$k->$method($method);
	}
}