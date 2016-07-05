<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 05.07.2016
 * Time: 22:01
 */

namespace App\Libs\Smartphone;


class Product
{
    public function getInfo($param){
        return $this->$param;
    }
}