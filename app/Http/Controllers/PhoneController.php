<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Libs\Smartphone\Parts\Baterry;
use \App\Libs\Smartphone\Parts\Camera;
use App\Libs\Smartphone\Parts\Screen;
use \App\Libs\Smartphone\Parts\Sreen;
use Illuminate\Support\Facades\App;

class PhoneController extends Controller
{
    public function indexAction(App $app){
        $phone =  $app::make('Iphone');
        $phoneArray = [
            "model"=>$phone->getInfo("vendor"),
            "battery"=>$phone->getPartVendor("battery"),
            "processor"=>$phone->getPartVendor("processor"),
            "camera"=>$phone->getPartVendor("camera"),
            "display"=>$phone->getPartVendor("display"),
        ];

        dd($phoneArray);

    }
}
