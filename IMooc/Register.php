<?php 
namespace IMooc;

// 注册树模式
class Register
{
	// 用于保存全局变量的数组
	private static $objets;

	// 设置
	static function set( $key, $val )
	{
		self::$objets[$key] = $val;
	}

	// 取值
	static function get( $key ){
		return self::$objets[$key];
	}

	// 卸载
	function _unset( $key )
	{
		unset(self::$objets[$key]);
	}
}