<?php 
namespace Imooc;

// 定义一个接口，用来整理几种数据库连接模式
interface IDatabase{
	// 连接
	function connect( $host, $user, $pwd, $dbname );
	// 查询
	function query( $sql );
	// 关闭连接
	function close();

}

// 因为整个项目都需要加载数据库，每次连接都会造成资源的浪费，所以这里采用单例模式来实现
class Database
{

	protected static $db;

	// 第一步：构造方法私有化，禁止实例化
	private function __construct()
	{

	}

	// 第二步，获取实例
	static function getInstance()
	{
		if( !self::$db ){
			self::$db = new self();
		}
		return self::$db;
	}

	// 第三步：私有化克隆方法
	private function __clone()
	{

	}

	/**
	 * where条件
	 */
	function where( $where='' )
	{
		return $this;
	}

	/**
	 * 排序方式
	 */
	function order( $order='' )
	{
		return $this;
	}

	/**
	 * 查询数量
	 */
	function limit( $limit='' )
	{
		return $this;
	}
}