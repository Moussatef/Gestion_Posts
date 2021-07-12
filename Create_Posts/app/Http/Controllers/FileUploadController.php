<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;

class FileUploadController extends Controller
{
    //
    function upload(Request $request)
    {
        $path = 'uploads/';
        $file = $request->file('_file');
        // dd($request->file('_file'));
        $newname = Helper::renameFile($path, $file->getClientOriginalName());
        $upload = $request->_file->move(public_path($path), $newname);
        if ($upload) {
            return $newname;
        }
    }
}
