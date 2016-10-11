<?php
ini_set('date.timezone', 'Asia/Shanghai');
class Order {
	function make_order($method=''){
		sleep(3);
		$this->w_txt($method);
	}
	function down_order($method=''){
		sleep(5);
		$this->w_txt($method);
	}
	function w_txt($method=''){
		$file='demo.txt';
		$f = fopen($file, 'a+');
		$data = date("Y-m-d H:i:s").'--'.$method.'\r\n';
		fwrite($f, $data);
		fclose($f);
	}
}
?>