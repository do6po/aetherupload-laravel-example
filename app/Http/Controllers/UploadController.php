<?php
/**
 * Created by PhpStorm.
 * User: box
 * Date: 20.10.18
 * Time: 12:32
 */

namespace App\Http\Controllers;


use AetherUpload\UploadHandler;

class UploadController extends UploadHandler
{
    public function index()
    {
        return view('upload');
    }
}