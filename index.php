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

// 实现链式操作
// $db = new \IMooc\Database;
// $a = $db->where('name=1')->order('id,desc')->limit(10);

// IMooc\Myobject::test();
// App\Controller\Home\Index::test();



