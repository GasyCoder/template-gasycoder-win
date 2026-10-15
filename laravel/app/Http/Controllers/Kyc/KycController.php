<?php

namespace App\Http\Controllers\Kyc;

use App\Http\Controllers\Controller;
use App\SampleData\KycData;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class KycController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function kycDetails()
    {
        return view('pages.pre-built.kyc.details');
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function kycList()
    {
        $kycs = KycData::list();

        return view('pages.pre-built.kyc.list', compact('kycs'));
    }
}
