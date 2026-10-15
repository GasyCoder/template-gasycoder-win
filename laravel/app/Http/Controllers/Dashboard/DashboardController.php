<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function ecommerce()
    {
        return view('pages.dashboard.ecommerce');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function copywriter()
    {
        return view('pages.dashboard.copywriter');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function sales()
    {
        return view('pages.dashboard.sales');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function crypto()
    {
        return view('pages.dashboard.crypto');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function analytics()
    {
        return view('pages.dashboard.analytics');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function invest()
    {
        return view('pages.dashboard.invest');
    }
}
