<?php 
namespace IMooc;

// 工厂类
class Factory
{
	// 创建数据库
	static function createDatabase()
	{
		$db = Database::getInstance();
		return $db;
	}
}