<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileupload;

class FileUploadController extends Controller
{
    public function FileUpload(Request $request){
        $request->file->store('Uploads');
        $fileupload = new fileupload;
        $fileupload->Uploader_Name = $request->Uploader_name;
        $fileupload->File = $request->file->hashName();
        $results = $fileupload->save();
        if($results){
            return ["File Uploaded to database"];
        }else{
            return ["File Not Uploaded to database"];
        }
    }
}
