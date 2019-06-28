<?php 
namespace IMooc\Database;

use IMooc\IDatabase;

class Mysql implements IDatabase{
	// 连接数据库
	function connect( $host, $user, $pwd, $dbname )
	{
		$conn = mysql_connect( $host, $user, $pwd );
		mysql_select_db( $dbname, $conn );
		$this->conn = $conn;
	}

	// 执行
	function query( $sql ){
		$res = mysql_query( $sql, $this->conn );
		return $res;
	}

	// 关闭连接
	function close(){
		mysql_close( $this->conn );
	}
}