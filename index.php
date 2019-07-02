<?php 
// 整个框架入口文件
// 网站根目录
define( 'BASEDIR' , __DIR__ );
// 系统分隔符，win(\) , linux(/)
define( 'DS', DIRECTORY_SEPARATOR );


// 引入自动加载文件
include BASEDIR . DS . 'IMooc' . DS . 'Loader.php';

// 执行自动加载函数
spl_autoload_register('\\Imooc\\Loader::autoload');

// ================栈，队列==================================
// 栈->特点，后进先出
// $stack = new SplStack();
// $stack->push("data1\n");
// $stack->push("data2\n");
// echo $stack->pop();
// echo $stack->pop();

// 队列->特点：后进先出
// $queue = new SplQueue();
// $queue->push("data1\n");
// $queue->push("data2\n");
// echo $queue->pop();
// echo $queue->pop();
// ================栈，队列==================================




// ================数据库==================================
// $obj = new \Imooc\Myobject;
// 实现链式操作
// $db = new \IMooc\Database;
// $a = $db->where('name=1')->order('id,desc')->limit(10);

// 工厂模式
// $db = \IMooc\Factory::createDatabase();
// $db2 = \IMooc\Factory::createDatabase();
// var_dump($db);die;
// var_dump($db2);die;

// 单例模式
// $single = \IMooc\Database::getInstance();
// $single2 = \IMooc\Database::getInstance();
// $single3 = \IMooc\Database::getInstance();
// var_dump($single);
// var_dump($single2);
// var_dump($single3);

// 注册树模式
// $set = \Imooc\Register::set('db1','asdf');
// $get = \Imooc\Register::get('db1');
// var_dump($get);die;
// ====修改版数据库对象，将其帮到注册树上，
// $db1 = \IMooc\Factory::createDatabase();
// \Imooc\Register::set('db1',$db1);
// $get_db1 = \Imooc\Register::get('db1');
// var_dump($get_db1);die;

// 适配器模式
// $mysql = new \IMooc\Database\Mysql();
// var_dump($mysql);die;

// 策略模式
/*
class Page
{
	protected $strategy;
	function index()
	{
		$this->strategy->showAdv();
		$this->strategy->showCategory();
	}

	function setStrategy( \IMooc\UserStrategy $strategy )
	{
		$this->strategy = $strategy;
	}
}
$page = new Page();
if(isset($_GET['female'])){
	$strategy = new \IMooc\Strategy;
}else{
	$strategy = new \IMooc\ManStrategy;
}
$page->setStrategy($strategy);
$page->index();
*/
// ================数据库==================================

// ==================观察者模式=====================================
/**
 *  观察者模式
 	观察者监听事件发生者（被观察者）
 	如果事件发生者发生改变的话要通知所有的观察者
 */
// class Event extends EventGenerator
// {
// 	/**
// 	 * eg：用户下单之后->商品库存减1->通知商家有新订单->通知快递小哥有新快递->通知客户订单已经生效
// 	 */
// 	function tirgger()
// 	{
// 		echo "用户下单了<br />\n";
// 		$this->notify();
// 	}
// }

// // 事件产生者（被观察者）基类
// abstract class EventGenerator
// {
// 	// 观察者数组
// 	private $servers;
// 	// 增加观察者
// 	function addObServer( Observer $server )
// 	{
// 		$this->servers[] = $server;
// 	}
// 	// 通知观察者
// 	function notify()
// 	{
// 		foreach ($this->servers as $server) {
// 			$server->update();
// 		}
// 	}
// }

// // 观察者基类
// interface Observer
// {
// 	function update();
// }

// // 商品
// class Goods implements Observer
// {
// 	function update()
// 	{
// 		echo "库存减1<br />\n";
// 	}
// }

// // 商家
// class Store implements Observer
// {
// 	function update()
// 	{
// 		echo "有客户下单啦<br />\n";
// 	}
// }

// // 快递
// class Express implements Observer
// {
// 	function update()
// 	{
// 		echo "您有新订单啦，请及时配送<br />\n";
// 	}
// }

// // 快递
// class User implements Observer
// {
// 	function update()
// 	{
// 		echo "您的订单配送中，请耐心等待<br />\n";
// 	}
// }

// $event = new Event();
// $event->addObServer( new Goods );
// $event->addObServer( new Store );
// $event->addObServer( new Express );
// $event->addObServer( new User );
// $event->tirgger();
// ==================观察者模式=====================================


// ==================原型模式===============================
// $canvas = new Imooc\Canvas();
// $canvas->init(10,10);
// $canvas->square();
// ==================原型模式===============================


// ==========================装饰器模式==========================
// 调用一下上次的原型模式


// interface Decorator
// {
// 	function Before();
// 	function After();
// }

// class ColorDecorator implements Decorator
// {
// 	function __construct( $color="red" )
// 	{
// 		$this->color = $color;
// 	}
// 	function Before()
// 	{
// 		echo "<div style='color:{$this->color}'>";
// 	}
// 	function After()
// 	{
// 		echo '</div>';
// 	}
// }

// class SizeDecorator implements Decorator
// {
// 	function __construct( $size="12px" )
// 	{
// 		$this->size = $size;
// 	}
// 	function Before()
// 	{
// 		echo "<div style='font-size:{$this->size};'>";
// 	}
// 	function After()
// 	{
// 		echo '</div>';
// 	}
// }

// $canvas = new Imooc\Canvas();
// $canvas->addDecorator(new ColorDecorator('green'));
// $canvas->addDecorator(new SizeDecorator('20px'));
// $canvas->init(20,20)->square();


// 自己测试

// 装饰器接口
interface Decorator
{
	function beforeDecorator();
	function afterDecorator();
}

// 改变颜色的装饰器
class ColorDecorator implements Decorator
{
	function __construct( $color="red" )
	{
		$this->color = $color;
	}
	function beforeDecorator()
	{
		echo "<div style='color:{$this->color}'>";
	}
	function afterDecorator()
	{
		echo '<div>';
	}
}

// 改变字体大小的装饰器
class SizeDecorator implements Decorator
{
	function __construct( $size="12px" )
	{
		$this->size = $size;
	}
	function beforeDecorator()
	{
		echo "<div style='font-size:{$this->size}'>";
	}
	function afterDecorator()
	{
		echo '<div>';
	}
}

class Test
{
	protected $decorators = array();

	function index()
	{
		$this->befor();
			echo '这是一个装饰器模式的小栗子';
		$this->after();
	}

	function befor()
	{
		foreach ($this->decorators as $key => $decorator) {
			$decorator->beforeDecorator();
		}
	}

	function after()
	{
		$this->decorators = array_reverse($this->decorators);
		foreach ($this->decorators as $key => $decorator) {
			$decorator->afterDecorator();
		}
	}

	function addDecorator( $decorator )
	{
		$this->decorators[] = $decorator;
	}
}

$test = new Test();
$test->addDecorator( new ColorDecorator('blue') );
$test->addDecorator( new SizeDecorator('24px') );
$test->index();

// ==========================装饰器模式==========================


// ================魔术方法==================================
// $obj = new \Imooc\Myobject;
// 访问一个对象不存在的属性
// $obj->title='hello';
// echo $obj->title;

// 访问一个对象不存在的方法
// $o = $obj->say_hello('hello',123123);
// echo $o;
// 访问一个对象不存在的静态方法
// $s = Imooc\Myobject::hello('66666666',55555555);
// echo $s;

/**
 * 正常情况下，对象是不能直接输出的，在输出的时候会调用__toString方法
 */
// echo $obj;

// 当对象被当函数执行的时候会触发invoke
// $a = $obj('test');
// ================魔术方法==================================

// IMooc\Myobject::test();
// App\Controller\Home\Index::test();



