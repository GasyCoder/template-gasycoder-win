<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function customerDetails()
    {
        return view('pages.pre-built.customer.details');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function customerList()
    {
        return view('pages.pre-built.customer.list');
    }
}
