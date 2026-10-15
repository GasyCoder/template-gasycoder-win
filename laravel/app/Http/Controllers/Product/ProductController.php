<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function productDetails()
    {
        return view('pages.pre-built.product.details');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function productList()
    {
        return view('pages.pre-built.product.list');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function productCard()
    {
        return view('pages.pre-built.product.card');
    }
}
