<?php

    /*
    与框架相关的类都将存在这个命名空间下
    该类用于准备框架工作
    
    */
    declare(strict_types = 1);
    namespace Framework;

    class App{//验证程序是否已经初始化
        public function run(){
            echo "application is running";

        }

    }
?>