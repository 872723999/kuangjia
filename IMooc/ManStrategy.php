<?php 
namespace IMooc;

/**
 * 男
 */
class ManStrategy implements UserStrategy
{
	function showAdv()
	{
		echo "鼠标，键盘";
	}

	function showCategory()
	{
		echo "男装";
	}
}