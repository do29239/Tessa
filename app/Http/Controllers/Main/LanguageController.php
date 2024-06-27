<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Support\Facades\Log;

class LanguageController extends Controller
{
    public function set($lang) {
        Log::info("Setting language to: " . $lang);
        session(['applocale' => $lang]);
        return back();
    }

}
