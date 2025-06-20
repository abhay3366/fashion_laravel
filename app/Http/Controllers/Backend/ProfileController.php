<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use  File;

class ProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile.index');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => ['image', 'max:2048']
        ]);

        $user = auth()->user();
        if ($request->hasFile('profile_image')) {
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->file('image'); // safer and clearer
            $imageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            $user->image = '/uploads/' . $imageName;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        flash()->success('Your changes have been saved!');
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);
        flash()->success('Your changes have been saved!');
        return redirect()->back();
    }
}
