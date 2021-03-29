<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index()
    {
        $result = "";
        return view('sample.upload', compact('result'));
    }

    public function upload_local(Request $request)
    {
        $file = $request->file('a');

        if (!is_null($file)) {

            date_default_timezone_set('Asia/Tokyo');

            $originalName = $file->getClientOriginalName();
            $micro = explode(" ", microtime());
            $fileTail = date("Ymd_His", $micro[1]) . '_' . (explode('.', $micro[0])[1]);

            $dir = 'upFiles';
            $fileName = $originalName . '.' . $fileTail;
            $file->storeAs($dir, $fileName, ['disk' => 'local']);

        }

        return view('sample.upload');
    }

    public function upload(Request $request)
    {
        $file = $request->file('a');

        if (!is_null($file)) {

            $path = $request->file('a')->store('muemues', 'conoha'); 

        }

        $result = "uploaded.";
        return view('sample.upload', compact('result'));
    }

}
