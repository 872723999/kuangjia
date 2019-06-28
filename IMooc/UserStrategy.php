<?php 
namespace IMooc;

// 策略模式
interface UserStrategy
{
	// 展示广告
	function showAdv();

	// 展示商品
	function showCategory();
}