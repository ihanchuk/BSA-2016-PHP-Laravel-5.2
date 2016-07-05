<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ShortUrlController extends Controller
{
    public function indexAction(){

        $t = new \GabrielKaputa\Bitly\Bitly();
        $bitly = $t->withGenericAccessToken("50183fc9a11db6b6d27363081d39a28523836eec");
        $short = $bitly->shortenUrl("http://google.com");

        $minitemplate = "<a href=\"{$short}\">link</a>";
        return $minitemplate;
    }
}
