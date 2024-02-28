<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    { 
        $invitationLink = route('invitation.generate', ['token' => Str::random(32)]); 
        $expiration = now()->addHour();
        
        $qrCode = QrCode::encoding('UTF-8')->size(300)->generate($invitationLink); 
        return view('profile.edit', [
            'user' => $request->user(),
            'invitationLink' => $invitationLink,
            'qrCode' => $qrCode, 
            'expiration' => $expiration
        ]);
    }

    /**
     * Update the user's profile information.
     */
    
     public function update(ProfileUpdateRequest $request): RedirectResponse
     {
         $validatedData = $request->validated();
         $user = $request->user();
         $user->fill($validatedData);
         
         if ($user->isDirty('email')) {
             $user->email_verified_at = null;
         }
     
         if ($request->hasFile('image')) {
             $user->image = $request->file('image')->store('images', 'public');
         }
         
         $user->save();
     
         return redirect()->route('profile.edit')->with('status', 'Profile mis à jour avec succès');
     }
     
    
    public function addimage(){
        
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
