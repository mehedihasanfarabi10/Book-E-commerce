<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLang($locale)
    {
        $supportedLocales = ['en', 'bn']; // Extend as needed

        if (in_array($locale, $supportedLocales)) {
            Session::put('locale', $locale);
        }
        return Redirect::back();
    }
}
