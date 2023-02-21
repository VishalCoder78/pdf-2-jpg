<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Imagick;

class ImageController extends Controller
{
    private $filename;
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
        $this->filename = time() . "-" . rand(1, 1000000);
        Storage::disk('local')->put('public/' . $this->filename . '.png', $imgBlob);

        // $echo = "Hello World from Controller";
        $data = array('echo' => $this->filename);
        return view('image')->with($data);
    }
    public function down(request $request)
    {
        return view($this->filename);
        
    }

// return view("storage/".$filename.".png", compact('filename'));

// $file= public_path(). '/storage/'.$filename.'.png';

// $headers = array(
//           'Content-Type: application/pdf',
//         );

// return Response::download($file, 'filename.pdf', $headers);


}