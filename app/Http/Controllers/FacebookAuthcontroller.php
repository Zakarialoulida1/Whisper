<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookAuthcontroller extends Controller
{
    public function redirect(){
        return Socialite::driver('facebook')->redirect();
    }
    public function callbackFacebook(){
        try{
            $google_user=Socialite::driver('facebook')->user();
            $user=User::where('facebook_id',$google_user->getId())->first();
            if(!$user){
                $new_user=User::create([
                    'name'=> $google_user->getName(),
                    'email'=>$google_user->getEmail(),
                    'facebook_id'=>$google_user->getId(),
                ]);
                Auth::login($new_user);
                return redirect()->intended('dashboard');
            }else{
                
                Auth::login($user);
                return redirect()->intended('dashboard');
            }
        }catch(\Throwable $th){
            dd("something went wrong! " . $th->getMessage());

        }
    }
}
