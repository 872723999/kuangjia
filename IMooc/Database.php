<?php 
namespace Imooc;
// 定义一个接口，子类必须包含父类的所有方法
class Database
{
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