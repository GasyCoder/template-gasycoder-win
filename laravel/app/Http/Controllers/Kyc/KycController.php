<?php

namespace App\Http\Controllers\Kyc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\SampleData\KycData;

class KycController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function kycDetails()
    {
        return view('pages.pre-built.kyc.details');
    }
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function kycList()
    {
        $kycs = KycData::list();
        return view('pages.pre-built.kyc.list', compact('kycs'));
    }
}

