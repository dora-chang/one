<?php
/**
 * Created by PhpStorm.
 * User: dora
 * Date: 2020/3/31
 * Time: 下午6:47
 */

define('BASEDIR', __DIR__);


include BASEDIR . '/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');


//IMooc\Objects::test();
//App\Controller\Home\index::test();

function quickly($array)
{
    $count = count($array);
    if ($count <= 1) {
        return $array;
    }
    $left = [];
    $right = [];
    $center = $array[0];
    unset($array[0]);
    foreach ($array as $v) {

        if ($v < $center) {

            $left[] = $v;

        } else {

            $right[] = $v;
        }
    }

    $left = quickly($left);
    $right = quickly($right);
    return array_merge($left, array($center), $right);

}

function pao($array)
{
    $count = count($array);
    if ($count < 2) {
        return false;
    }

    for ($i = 0; $i < $count - 1; $i++) {

        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;

            }

        }

    }
    return $array;
}

/**
 * 选择最小的，并在余下的肿找到最小的与他换位置
 * @param $array
 */
function selectSort($array)
{
    $count = count($array);
    if ($count < 2) {
        return false;
    }

    for ($i = 0; $i < $count - 1; $i++) {
        $p = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($array[$p] > $array[$j]) {
                $p = $j;
            }
        }

        if ($p != $i) {
            $temp = $array[$p];
            $array[$p] = $array[$i];
            $array[$i] = $temp;
        }

    }
    return $array;

}

$array = [45, 1, 5, 78, 40, 30, 54, 2];

//var_dump(quickly($array));
//var_dump(pao($array));

//var_dump(selectSort($array));

//公鸡3元每只，母鸡5元每只，小鸡1元3只，一百元钱买一百只鸡，请用伪代码写出求公鸡，母鸡和小鸡的数目

//
//for($x=0;$x<(100/3);$x++) {
//    for ($y = 0; $y < 20; $y++) {
//        for ($z = 0; $z < 100; $z++) {
//
//            if (($x * 3 + $y * 5 + ($z / 3)) == 100 && ($x + $y + $z == 100)) {
//                echo $x.":".$y.":".$z."<br>";
//            }
//        }
//    }
//}

//1,1,2,3,5,8,13,21,34.。。。 求第30位的数是多少，请用伪代码描述其实现方法


//$one = 1;
//$two = 1;
//$i=1;
//$a=[1];
//while($i<=15){
//    $one = $one+$two;
//    $two = $one+$two;
//    $a[] = $one;
//    $a[] = $two;

//$i++;
//
//}

//var_dump($a);

//$a=2;$b=4;$c=0;
//$a=$b=$c=0;
////$a=$b && $c;
//$a=$b && $c;
//echo $a;
//echo $b;
//echo $c;

//compact 将变量组合为数组
$key_1 = "val_1";
$key_2 = "val_2";
$data = array('$key_3'=>'val_3','$key_4'=>'val_4');
$arr_n =compact('key_1','key_2','data');
var_dump($arr_n);
echo "compact:\n";

