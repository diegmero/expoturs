<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Change the application language
     *
     * @param string $locale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function switch($locale)
    {
        // Validate that the locale is supported
        if (!in_array($locale, ['en', 'es'])) {
            abort(400, 'Invalid language');
        }

        // Store the selected language in session
        Session::put('locale', $locale);

        // Set the application locale
        App::setLocale($locale);

        // Redirect back to the previous page
        return redirect()->back();
    }
}
