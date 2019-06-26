<?php 
namespace IMooc;

/**
 * 自动加载类
 */
class Loader
{
	static function autoload( $class )
	{
		require BASEDIR . DS . $class . '.php';
	}
}