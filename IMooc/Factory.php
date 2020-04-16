<?php
/**
 * Created by PhpStorm.
 * User: dora
 * Date: 2020/3/31
 * Time: 下午8:19
 */

namespace IMooc;


class Factory
{
  static function createdDate()
  {
      $ob = new \IMooc\Objects;
      return $ob;
  }
}