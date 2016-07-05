<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function indexAction(){
        $links = [
            "phone"=>action("PhoneController@indexAction"),
            "urls" =>action("ShortUrlController@indexAction")
        ];
        return view("partials.main")->with("links",$links);
    }
}
