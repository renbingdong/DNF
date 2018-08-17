<?php
namespace mvc;

/**
 * URL 重写配置
 */
class Rewrite {

    
    public static function getUrl($url) {
        $urlArray = array(
            '/'     => '/index/welcome',
            '/home' => '/index/index',
        );    
        return $urlArray[$url];
    } 
}
