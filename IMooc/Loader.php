<?php
/**
 * Created by PhpStorm.
 * User: dora
 * Date: 2020/3/31
 * Time: 下午7:01
 */

namespace IMooc;


class Loader
{

    static function autoload($class){

        require BASEDIR.'/'.str_replace('\\','/',$class).'.php';

    }

}