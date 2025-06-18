<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

trait ImageUploadTrait
{
    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {
            // if (File::exists(public_path($user->image))) {
            //     File::delete(public_path($user->image));
            // }
            $image = $request->{$inputName};
            $imageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;
        }
    }
}
