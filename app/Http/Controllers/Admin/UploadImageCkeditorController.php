<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presentation;
use Illuminate\Http\Request;

class UploadImageCkeditorController extends Controller
{
    public function upload(Request $request)
    {
        
        $presentation = new Presentation();
        $presentation->id  = 0;
        $presentation->exists = true;
//        $image = $presentation->addMedia('upload');
        $image = $presentation->addMediaFromRequest('upload')->toMediaCollection('images');

        // dd($image->getUrl());

        return response()->json([
            'url' => $image->getUrl()
        ]);
    }
}
