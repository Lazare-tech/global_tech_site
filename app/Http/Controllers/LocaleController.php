<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    //
  public function switch($locale)
{
    $supported = ['fr', 'en','es']; // langues disponibles
    if (!in_array($locale, $supported)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return redirect()->back();
}

}
