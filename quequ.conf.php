<?PHP

/**
 * 队列配置
 *
 * 结构说明：
 * 同步对象 -> 相关操作类 -> 相关操作
 *
 *
 *
 */

return array(
	//
	'order' => array(
		'name' => '订单类',
		'className' => 'Order',
		'items' => array(
			'make_order' => array(
				'class' => 'Order',
				'method' => 'make_order',
				'msg' => '订单类->下订单'
			),
			'down_order' => array(
				'class' => 'Order',
				'method' => 'down_order',
				'msg' => '订单类->下载订单'
			),
        )
	)
);