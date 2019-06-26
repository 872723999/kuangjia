<?php
namespace IMooc;

class Myobject
{

	protected $array = array();

	/**
	 * 设置值
	 * 当一个类的属性不存在的时候会触发此方法
	 */
	function __set( $key, $val )
	{
		$this->array[$key] = $val;
	}

	/**
	 * 取值
	 * 当一个类的属性不存在的时候会触发此方法
	 */
	function __get( $key )
	{
		return $this->array[$key];
	}

	/**
	 * 访问一个类的不存在的方法时会触发此方法
	 */
	function __call( $func, $param )
	{
		var_dump($func, $param);
		return "方法不存在\n";
	}

	/**
	 * 访问一个不存在的静态方法时会触发此方法
	 */
	static function __callStatic( $func, $param ){
		var_dump($func, $param);
		return "静态方法不存在\n";
	}

	/**
	 * 当一个类转换成字符时候会调用此方法
	 */
	function __toString(){
		return __Class__;
	}
}