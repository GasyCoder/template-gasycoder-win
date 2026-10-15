<?php

namespace App\SampleData;

class KycData
{
    public static function list(): array
    {
        $list = [
            [
                'id' => 'UD01544',
                'name' => 'Abu Bin Ishtiyak',
                'theme' => 'primary',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02',
                'status' => 'approved',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD01489',
                'name' => 'Amelia Grant',
                'avatar' => '/images/avatar/b-sm.jpg',
                'theme' => 'primary',
                'docType' => 'National ID',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '12 Jan, 2020 01:02 PM',
                'status' => 'approved',
                'checkedBy' => 'Ernesto Vargas',
            ],
            [
                'id' => 'UD01434',
                'name' => 'Kristen Hawkins',
                'avatar' => '/images/avatar/c-sm.jpg',
                'theme' => 'primary',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '12 Jan, 2020 01:02 PM',
                'status' => 'approved',
                'checkedBy' => 'Ernesto Vargas',
            ],
            [
                'id' => 'UD01286',
                'name' => 'Tommy Vasquez',
                'theme' => 'primary',
                'docType' => 'Driving ID',
                'documents' => ['Front side'],
                'submitted' => '12 Jan, 2020 01:02 PM',
                'status' => 'pending',
                'checkedBy' => 'Ernesto Vargas',
            ],
            [
                'id' => 'UD01235',
                'name' => 'Alejandro Haynes',
                'theme' => 'yellow',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'approved',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD01223',
                'name' => 'Brooke Harmon',
                'theme' => 'primary',
                'avatar' => '/images/avatar/a-sm.jpg',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'rejected',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD01124',
                'name' => 'Trevor Miller',
                'avatar' => '/images/avatar/d-sm.jpg',
                'theme' => 'primary',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'approved',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD01120',
                'name' => 'Lonnie Ferguson',
                'theme' => 'primary',
                'avatar' => '/images/avatar/a-sm.jpg',
                'docType' => 'Driving ID',
                'documents' => ['Front side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'pending',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD00954',
                'name' => 'Mack Kennedy',
                'theme' => 'green',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'approved',
                'checkedBy' => 'Janet Snyder',
            ],
            [
                'id' => 'UD00472',
                'name' => 'Inez Wilkerson',
                'theme' => 'primary',
                'docType' => 'Passport',
                'documents' => ['Front side', 'Back side'],
                'submitted' => '18 Dec, 2019 01:02 PM',
                'status' => 'rejected',
                'checkedBy' => 'Janet Snyder',
            ],
        ];

        return $list;
    }
}
