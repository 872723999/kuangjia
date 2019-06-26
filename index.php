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

// ================数据库==================================





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



