<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;

class VimeoController extends Controller
{
    public function upload(Request $request)
    {
        // dd($request->video);
        $url = Vimeo::upload($request->video, [
            'name' => 'new title',
            'description' => 'new description',
        ]);
        return response()->json([
            'url' => $url,
        ]);
    }
}