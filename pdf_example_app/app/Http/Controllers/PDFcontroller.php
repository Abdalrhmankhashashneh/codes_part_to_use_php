<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Response;

class PDFController extends Controller
{
    public function index()
    {
        $html = view('welcome')->render();
        $path = env('APP_URL') . '/codes_part_to_use_php/pdf_example_app/node_modules';
        $filePath = public_path('converted-image_' . date('ymd') . '.pdf');

        Browsershot::html($html)
            ->setNodeBinary(env('NODE_BINARY', '/usr/local/bin/node')) // Use the correct Node.js binary path if required
            ->setNpmBinary(env('NPM_BINARY', '/usr/local/bin/npm')) // Use the correct npm binary path if required
            ->noSandbox()
            ->save($filePath);

        return Response::download($filePath)->deleteFileAfterSend(true);
    }
}
