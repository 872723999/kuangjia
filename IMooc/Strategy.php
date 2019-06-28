<?php 
namespace IMooc;

// 女
class Strategy implements UserStrategy
{
	function showAdv()
	{
		echo "2019新款";
	}

	function showCategory()
	{
		echo "女装";
	}
}