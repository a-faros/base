<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class XmlController extends Controller
{

        /**
         * Write code on Method
         *
         * @return response()
         */
        public function index()
        {
            $mediaPath = public_path('storage');
            $filesInFolder = File::allFiles($mediaPath);
            $allMedia = [];


            foreach ($filesInFolder as $path) {
                $files = pathinfo($path);
                $allMedia[] = $files['basename'];
            }

           $xmlString = file_get_contents(public_path('storage\B2MML-Common.xsd'));
            $xmlObject = simplexml_load_string($xmlString);

            $json = json_encode($xmlObject);
            $phpArray = json_decode($json, true);
            dd($xmlObject);
            dd($phpArray);
        }

}
