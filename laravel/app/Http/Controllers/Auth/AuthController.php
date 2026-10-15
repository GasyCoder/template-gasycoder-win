<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function login()
    {
        return view('pages.auth.login');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function logout()
    {
        return view('pages.auth.login');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function register()
    {
        return view('pages.auth.register');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function reset()
    {
        return view('pages.auth.reset');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function success()
    {
        return view('pages.auth.success');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function loginv2()
    {
        return view('pages.auth.login-v2');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function registerv2()
    {
        return view('pages.auth.register-v2');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function resetv2()
    {
        return view('pages.auth.reset-v2');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function successv2()
    {
        return view('pages.auth.success-v2');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function loginv3()
    {
        return view('pages.auth.login-v3');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function registerv3()
    {
        return view('pages.auth.register-v3');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function resetv3()
    {
        return view('pages.auth.reset-v3');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function successv3()
    {
        return view('pages.auth.success-v3');
    }
}
