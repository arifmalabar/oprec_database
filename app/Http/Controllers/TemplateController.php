<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class TemplateController extends Controller
{
    public static function templateHandler($view, $judul, $data)
    {
        $data['judul'] = $judul == "" ? "" : $judul;
        return view($view, $data);
    }
}
