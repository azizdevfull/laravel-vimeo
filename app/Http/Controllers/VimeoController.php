<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vimeo\Laravel\Facades\Vimeo;

class VimeoController extends Controller
{
    public function __construct()
    {

    }
    public function upload(Request $request)
    {
        $url = Vimeo::upload($request->video, [
            'name' => 'new title',
            'description' => 'new description',
        ]);
        return response()->json([
            'url' => Vimeo::request($url),
        ]);
    }
}
