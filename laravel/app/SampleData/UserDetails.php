<?php

namespace App\SampleData;

class UserDetails
{
    static function details (): array 
    {
        $data = [
            'id' => 'U1901',
            'theme' => 'primary',
            'name' => 'Abu Bin Ishtiyak',
            'displayName' => 'ishtiyak',
            'dob' => '10 Aug, 1980',
            'role' => 'Investor',
            'checked' => false,
            'email' => 'info@softnio.com',
            'phone' => '+818 474-958',
            'emailStatus' => 'success',
            'kycStatus' => 'Approved',
            'lastLogin' => '15 Feb, 2019 01:02 PM',
            'joiningDate' => '08-16-2018 09:04PM',
            'status' => 'active',
            'address' => '2337 Kildeer Drive',
            'state' => 'Kentucky',
            'country' => 'Canada',
            'nationality' => 'Canada',
            'balance' => [
                'invest' => '2,500.00',
                'profit' => '1,643.76',
            ],
            'orders' => [
                'total' => '23',
                'completed' => '20',
                'progress' => '3',
            ],
            'groups' => ['investor', 'support', 'another tag'],
            'notes' => [
                [
                    'note' => 'Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra.',
                    'on' => 'November 18, 2019',
                    'at' => '5:34 PM',
                    'by' => 'Softnio',
                ],
                [
                    'note' => 'Aproin at metus et dolor tincidunt feugiat eu id quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean sollicitudin non nunc vel pharetra.',
                    'on' => 'November 18, 2019',
                    'at' => '5:34 PM',
                    'by' => 'Softnio',
                ],
            ],
        ];

        return $data;
    }
}

