<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\App;


class ShortUrlController extends Controller
{
    public function indexAction(App $app){
        $bitLy =  $app::make('Bit');

        $inst = $bitLy->withGenericAccessToken("50183fc9a11db6b6d27363081d39a28523836eec");
        $short = $inst->shortenUrl("http://yahoo.com");
       // $test = (new \App\Libs\Smartphone\Parts\Screen\LedScreen())->getScreen();

        return view("partials.bit")->with("link",$short);
    }
}
