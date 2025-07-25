<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SampleData\UserProfile;

class AdminProfileController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function profile()
    {
        $user = UserProfile::profile();
        return view('admin.profile', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function profileSetting()
    {
        $user = UserProfile::profile();
        return view('admin.profile-setting', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function profileNotification()
    {
        $user = UserProfile::profile();
        return view('admin.profile-notification', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function profileActivity()
    {
        $user = UserProfile::profile();
        return view('admin.profile-activity', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @version 1.0.0
     * @since 1.0
     */
    public function profileSocial()
    {
        $user = UserProfile::profile();
        return view('admin.profile-social', compact('user'));
    }
}

