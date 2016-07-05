<?php
/**
 * Created by PhpStorm.
 * User: igor
 * Date: 05.07.2016
 * Time: 22:08
 */

namespace App\Libs\Smartphone\Iphone;


class Iphone4S extends \App\Libs\Smartphone\Product
{

    protected $vendor = "Apple iPhone";
    protected $battery;
    protected $display;
    protected $camera;
    protected $processor;

    public function __construct($processor,$display,$camera,$battery)
    {
        $this->processor = $processor;
        $this->display= $display;
        $this->camera = $camera;
        $this->battery = $battery;
    }

    public function getPartVendor($part){
        return $this->$part->getInfo("vendor");
    }

}