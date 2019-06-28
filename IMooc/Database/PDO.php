<?php 
namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase{
	// 连接数据库
	function connect( $host, $user, $pwd, $dbname )
	{
		protected $conn;
		$conn = new \PDO( "mysql:host=$host;dbname=$dbname", $user, $password );
		$this->conn = $conn;
	}

	function query( $sql )
	{
		return $this->conn->query( $sql );
	}

	// 关闭连接
	function close(){
		unset( $this->conn );
	}
}