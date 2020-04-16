<?php
/**
 * Created by PhpStorm.
 * User: dora
 * Date: 2020/3/31
 * Time: 下午6:49
 */

namespace IMooc;
class Objects
{


    static function test()
    {
        $spl = new \SplStack();
        $spl->push('a');
        $spl->push('b');
        echo $spl->pop();

    }


}