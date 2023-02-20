<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Imagick;

class ImageController extends Controller
{
    public function index(request $request)
    {
        $imagick = new \Imagick();
        $imagick->readImage($request->file);
        // $jpg_data = $imagick->getImageBlob();
        // return view('convert', ['jpg_data' => $jpg_data]);

        foreach ($imagick as $key => $page) {
            $page->setImageFormat('jpg');
        }


        //   header('Content-Type: image/jpg');
        $imgBlob = $imagick->getImageBlob();
        $filename = time() . "-" . rand(1, 1000000);
        Storage::disk('local')->put('public/' . $filename . '.png', $imgBlob);

        // $echo = "Hello World from Controller";
        $data = array('echo' => $filename);
        return view('image')->with($data);

        return response()->streamDownload(function () {
            echo file_get_contents('http://localhost:8000/storage/'.$filename.'.png');
        }, ".$filename.'.jpg'");

        // echo 'Converted! <hr/> <a  href="/storage/'.$filename.'.png" target="_blank" download >Download your image</a> <img src="/storage/'.$filename.'.png" alt="image">';

    }



}