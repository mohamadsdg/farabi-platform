<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    const STORAGE_PATH_TO_UPLOAD_STARTUP = 'public/startup/';
    const WEBSITE_NAME = 'fp';

    public function upload(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response(NULL, 419);
        }

        $ip = $request->ip();

        // Upload File
        $file = $request->file('file');

        $allowMimeTypes = [
            'application/pdf',
            'image/jpg',
            'image/jpeg',
            'image/png'
        ];

        if (!in_array($file->getMimeType(), $allowMimeTypes)) {
            return response('type not allowed', 419);
        }

        //Make Model Folder
        if (!Storage::exists(self::STORAGE_PATH_TO_UPLOAD_STARTUP . $ip . '/')) {
            Storage::makeDirectory(self::STORAGE_PATH_TO_UPLOAD_STARTUP . $ip . '/');
        }

        $randText = rand(10000, 99999);
        $fileName = $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '', $file->getClientOriginalName());

        if (Storage::exists(self::STORAGE_PATH_TO_UPLOAD_STARTUP . $ip . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }

        $filePath = self::STORAGE_PATH_TO_UPLOAD_STARTUP . $ip . '/';
        Storage::putFileAs($filePath, $file, $fileName);

        return 1;
    }
}
