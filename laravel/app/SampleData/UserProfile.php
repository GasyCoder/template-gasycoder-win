<?php

namespace App\SampleData;

class UserProfile
{
    public static function profile(): array
    {
        $data = [
            'id' => 'U1901',
            'theme' => 'primary',
            'name' => 'Abu Bin Ishtiyak',
            'displayName' => 'ishtiyak',
            'dob' => '10 Aug, 1980',
            'role' => 'Customer',
            'email' => 'info@softnio.com',
            'balance' => [
                'btc' => '12.395769',
                'locked' => '0.344939',
            ],
            'phone' => '+818 474-958',
            'lastLogin' => '10 Feb 2020',
            'address' => '2337 Kildeer Drive',
            'state' => 'Kentucky',
            'country' => 'Canada',
            'language' => 'English',
            'dateFormat' => 'M d, YYYY',
            'timezone' => 'Bangladesh (GMT +6)',
        ];

        return $data;
    }
}
