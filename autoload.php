<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

$version = '0.6.0';

/*
function Aliyun_Log_PHP_Client_Autoload($className) {
    echo "className=$className\n";
    $classPath = explode('_', $className);
    if ($classPath[0] == 'Aliyun') {
        if(count($classPath)>5)
            $classPath = array_slice($classPath, 0, 5);
        if(strpos($className, 'Request') !== false){
            $lastPath = end($classPath);
            array_pop($classPath);
            array_push($classPath,'Request');
            array_push($classPath, $lastPath);
        }
        if(strpos($className, 'Response') !== false){
            $lastPath = end($classPath);
            array_pop($classPath);
            array_push($classPath,'Response');
            array_push($classPath, $lastPath);
        }
        $filePath = dirname(__FILE__) . '/' . implode('/', $classPath) . '.php';
        if (file_exists($filePath))
            echo $filePath."\n";
            require_once($filePath);
    }
}

spl_autoload_register('Aliyun_Log_PHP_Client_Autoload');
 */

function classLoader($class)
{
    echo "class=".$class."\n";
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR .'src'. DIRECTORY_SEPARATOR . $path . '.php';
    echo "require file=".$file."\n";
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');
