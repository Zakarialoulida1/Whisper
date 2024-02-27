<?php

namespace App\Http\Controllers;

use App\Events\PrivateWebsocket;
use App\Events\testwebsocket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
       event(new testwebsocket) ;
    }
    public function private(){
        event(new PrivateWebsocket) ;
     }
}
