<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\SampleData\UserData;
use App\SampleData\UserDetails;
use App\SampleData\UserProfile;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userCard()
    {
        $users = UserData::list();

        return view('pages.pre-built.user.card', compact('users'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userList()
    {
        $users = UserData::list();

        return view('pages.pre-built.user.list', compact('users'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userListCompact()
    {
        $users = UserData::list();

        return view('pages.pre-built.user.list-compact', compact('users'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userProfile()
    {
        $user = UserProfile::profile();

        return view('pages.pre-built.user.profile', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userProfileSetting()
    {
        $user = UserProfile::profile();

        return view('pages.pre-built.user.profile-setting', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userProfileNotification()
    {
        $user = UserProfile::profile();

        return view('pages.pre-built.user.profile-notification', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userProfileActivity()
    {
        $user = UserProfile::profile();

        return view('pages.pre-built.user.profile-activity', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userProfileSocial()
    {
        $user = UserProfile::profile();

        return view('pages.pre-built.user.profile-social', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userDetails()
    {
        $user = UserDetails::details();

        return view('pages.pre-built.user.details', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userDetailsTransactions()
    {
        $user = UserDetails::details();

        return view('pages.pre-built.user.details-transactions', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userDetailsNotifications()
    {
        $user = UserDetails::details();

        return view('pages.pre-built.user.details-notification', compact('user'));
    }

    /**
     * @return Application|Factory|View
     *
     * @version 1.0.0
     *
     * @since 1.0
     */
    public function userDetailsActivities()
    {
        $user = UserDetails::details();

        return view('pages.pre-built.user.details-activity', compact('user'));
    }
}
