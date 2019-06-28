<?php 
namespace IMooc\Database;

use IMooc\IDatabase;

class Mysqli implements IDatabase{
	// 连接数据库
	function connect( $host, $user, $pwd, $dbname )
	{
		$conn = mysqli_connect( $host, $user, $pwd, $dbname );
		$this->conn = $conn;
	}

	// 执行
	function query( $sql ){
		$res = mysqli_query( $sql, $this->conn );
		return $res;
	}

	// 关闭连接
	function close(){
		mysqli_close( $this->conn );
	}
}