<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    function index()
    {
        return view('frontend.dashboard.profile');
    }

   public function updateProfile(Request $request)
{
    $request->validate([
        'username' => 'required|unique:users,username,' . Auth::id(),
        'email'    => 'required|email|unique:users,email,' . Auth::id(),
        'image'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $user = Auth::user();

    if ($request->hasFile('image')) {
        // Delete old image if exists
        if ($user->image && File::exists(public_path($user->image))) {
            File::delete(public_path($user->image));
        }

        // Upload new image
        $image = $request->file('image');
        $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads'), $imageName);
        $user->image = 'uploads/' . $imageName;
    }

    // Update other fields
    $user->username = $request->username;
    $user->email = $request->email;
    $user->save();

    return redirect()->route('user.profile')->with('success', 'Profile updated successfully!');
}

public function updatePassword(Request $request){
    $request->validate([
       'current_password'=>['required','current_password'],
        'password'=>['required','confirmed','min:8']
    ]);

     $request->user()->update([
        'password'=>bcrypt($request->password)
    ]);

    return redirect()->route('user.profile')->with('success','Password update successfully');
}

}
