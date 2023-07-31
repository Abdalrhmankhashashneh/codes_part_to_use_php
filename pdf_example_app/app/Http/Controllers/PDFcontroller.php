<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\Response;
class PDFcontroller extends Controller
{
  function index(){
    $html = view('welcome')->render();

    $filePath =public_path('converted-image_'.date('ymd').'.png');
    Browsershot::html($html)->save($filePath);

        return Response::download($filePath)->deleteFileAfterSend(true);
    echo "Hi PDF" ;
  }
}
