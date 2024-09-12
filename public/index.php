
<?php
    /*
    负责处理所有请求的文件
    但该文件不会创建实例
    
    */

    $app = include __DIR__ . "/../src/APP/bootstarp.php";

     $app->run();//运行检查，启动文件中只负责加载，创建-bootstarp.php

?>