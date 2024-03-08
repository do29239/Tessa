<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    public function set($lang) {
        session(['applocale' => $lang]);

        return back();
    }

}
