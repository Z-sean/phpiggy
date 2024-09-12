<?php
    /*
    该文件应用于加载与配置我们的应用程序所需要的文件
    启动程序的工作由index实现
    */

    declare(strict_types = 1);

    include __DIR__ . "/../../vendor/autoload.php";
    use Framework\App;

    $app = new APP();
        
    return $app;

?>