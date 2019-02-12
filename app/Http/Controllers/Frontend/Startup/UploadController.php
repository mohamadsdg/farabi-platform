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
        if (
            !$request->hasFile('business_model')
            && !$request->hasFile('business_plan')
            && !$request->hasFile('finance_model')
            && !$request->hasFile('pitchdeck')
        ) {
            return response(NULL, 422);
        }

        // Upload File
        $file = head($request->file());

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
        if (!Storage::exists(self::STORAGE_PATH_TO_UPLOAD_STARTUP . '/')) {
            Storage::makeDirectory(self::STORAGE_PATH_TO_UPLOAD_STARTUP . '/');
        }

        $randText = rand(10000, 99999);
        $fileName = $randText . '-' . preg_replace("/[^a-zA-Z0-9.]/", '', $file->getClientOriginalName());

        if (Storage::exists(self::STORAGE_PATH_TO_UPLOAD_STARTUP . '/' . $fileName)) {
            $fileName = rand(10000, 99999) . '-' . $fileName;
        }

        $filePath = self::STORAGE_PATH_TO_UPLOAD_STARTUP . '/';
        Storage::putFileAs($filePath, $file, $fileName);

        return response()->json(trim($fileName));
    }
}
