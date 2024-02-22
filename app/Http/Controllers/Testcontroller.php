<?php

namespace App\Http\Controllers;

use App\Events\testWebsocket;
use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    public function  test() {
        event(new testWebsocket);
    }
}
