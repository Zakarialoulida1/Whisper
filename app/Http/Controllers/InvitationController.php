<?php

namespace App\Http\Controllers;


use Illuminate\Routing\Controller;

use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class InvitationController extends Controller
{
    public function generateInvitation()
    {
       
    
        return view('profile.edit', [
            'invitationLink' => $invitationLink,
            'qrCode' => $qrCode, 
            'expiration' => $expiration
        ]);
    }
    
    
    
}
