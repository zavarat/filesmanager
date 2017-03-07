<?php

namespace App\Helpers;

use App\Models\File;
use Illuminate\Http\Request;

class Upload {

    public static function process(Request $request)
    {
        if($request->file('files')){
            $fileModel = new File();
            foreach ($request->file('files') as $file){
                if($row = $fileModel->upload($file)){
                    $url = route('files.show',$row->id);
                    return $url;
                }
            }
        }
        return false;
    }
}