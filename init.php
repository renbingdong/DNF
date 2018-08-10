<?php

##  php 7.0 之后 error也可以捕获，但是为了兼容低版本error时友好显示，加上set_error_handler处理方法
function _error_handler ($errno, $error, $file, $line) {
    error_log("file:{$file}, line:{$line}, errno:{$errno}, errmsg:{$error} \n");
    echo "系统出错，请联系开发人员!";
}
set_error_handler('_error_handler', E_ALL);

function _exception_handler ($e) {
    error_log("uncaugth exception: " . $e->getMessage() . "\n");
    echo "系统异常，请联系开发人员!";
}
set_exception_handler('_exception_handler');

function _autoload($class) {
    $classTmp = str_replace('\\', '/', $class);
    $file = __DIR__ . "/{$classTmp}.php";
    if (is_file($file)) {
        require "$file";
    }
}
spl_autoload_register('_autoload');
