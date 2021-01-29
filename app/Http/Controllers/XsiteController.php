<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Xsiswa;
use App\Xpost;

class XSiteController extends Controller
{
    public function home(){
        return view('xsites.home');
    }

}