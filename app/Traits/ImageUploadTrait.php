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

    // update image
    
     public function updateImage(Request $request, $inputName,$path, $oldPath=null)
    {
        if ($request->hasFile($inputName)) {
            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }
            $image = $request->{$inputName};
            $imageName = uniqid() . '-' . $image->getClientOriginalName();
            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;
        }
    }

    //delet 

    public function deleteImg($path){
        if(File::exists(public_path($path))){
            File::delete(public_path($path));
        }
    }
}
