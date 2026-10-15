<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SampleData\UserProfile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AdminProfileController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function profile()
    {
        $user = UserProfile::profile();

        return view('admin.profile', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function profileSetting()
    {
        $user = UserProfile::profile();

        return view('admin.profile-setting', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function profileNotification()
    {
        $user = UserProfile::profile();

        return view('admin.profile-notification', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function profileActivity()
    {
        $user = UserProfile::profile();

        return view('admin.profile-activity', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function profileSocial()
    {
        $user = UserProfile::profile();

        return view('admin.profile-social', compact('user'));
    }
}
