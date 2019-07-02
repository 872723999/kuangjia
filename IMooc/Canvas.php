<?php 
namespace IMooc;

class Canvas
{

	protected $decorators = array();
	function init( $w=20, $h=20 )
	{
		$this->width = $w;
		$this->height = $h;
		return $this;
	}

	function square()
	{
		$this->beforeDraw();
		$str = '';
		for ($i=0; $i <$this->height ; $i++) {
			$str = str_repeat("&nbsp;&nbsp;* ", $this->width);
			$str .= "<br/>\n";
			echo $str;
		}
		$this->afterDraw();
	}

	function beforeDraw()
	{
		foreach ($this->decorators as $key => $decorator) {
			$decorator->Before();
		}
	}

	function afterDraw()
	{
		$decorator = array_reverse($this->decorators);
		foreach ($this->decorators as $key => $decorator) {
			$decorator->after();
		}
	}

	// 动态添加装饰器
	function addDecorator( $decorator )
	{
		$this->decorators[] = $decorator;
	}
}