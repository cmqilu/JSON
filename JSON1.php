<?php

	$array_1 = array();
	$array_2 = array();
	
	$array_1['username'] = "wf";
	$array_1['age'] = 23;
	
	$array_2['member']['yuanminghe']['username'] = "ericwolf";
	$array_2['member']['yuanminghe']['age'] = 23;
	
	$array_2['member']['zhangsan']['username'] = "yuanminghe";
	$array_2['member']['zhangsan']['age'] = 24;
	
	print_r($array_1);
	print_r($array_2);
	
	$jsonObj_1 = json_encode($array_1);//将一维数组转换成JSON格式
	
	echo $jsonObj_1;
	
	$jsonObj_2 = json_encode($array_2);//将二维数组转化成JSON格式
	
	echo $jsonObj_2;
	
	class muke{
		public $name="public Name";
		protected $ptName="protected Name";
		private $pName="private Name";
		
		public function getName(){
			return $this->name;
		}
	}
	
	$mukeObj = new muke();
	
	print_r($mukeObj);//对象
	
	$obj2JSON = json_encode($mukeObj);//将对象数据格式转化成JSON数据格式
	
	print_r($obj2JSON);
	
	$jsonStr = '{"key":"value","key1":"value1"}';
	
	echo $jsonStr;
	
	$json2Array = json_decode($jsonStr,true);//将JSON数据格式转化成对象或数组数据格式
	//第二个变量为空时 转化成为对象 若为true 则转成数组
	
	print_r($json2Array);