<?php

namespace App\Http\Controllers;

use App\Http\Requests;
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

//        dd($phoneArray);

        return view("partials.phone")->with("phone",$phoneArray);

    }
}
