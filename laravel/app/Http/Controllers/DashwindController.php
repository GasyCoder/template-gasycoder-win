<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class DashwindController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     * @version 1.0.0
     * @since 1.0
     */
    public function darkmode(Request $request)
    {
        $mode = $request->get('theme-mode', 'light');
        $cookie_key = strtolower(config('app.name')).'_dark_mode';

        Cookie::queue(Cookie::make($cookie_key, $mode, (60 * 24 * 30)));

        return ($request->ajax()) ? response()->json(['status' => 'success']) : back();
    }
}

