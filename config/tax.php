<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tax Configuration
    |--------------------------------------------------------------------------
    |
    | This file is for storing the configuration tax
    |
    */

    'relief' => [
        'TK0' => [
            'name' => 'Single',
            'value' => 54000000
        ],
        'K0' => [
            'name' => 'Married with no dependant',
            'value' => 58500000
        ],
        'K1' => [
            'name' => 'Married with 1 dependant',
            'value' => 63000000
        ],
        'K2' => [
            'name' => 'Married with 2 dependant',
            'value' => 67500000
        ],
        'K3' => [
            'name' => 'Married with 3 dependant',
            'value' => 72000000
        ]
    ],
    'scheme' => [
        [
            'value' => 0,
            'percent' => 5
        ], [
            'value' => 50000000,
            'percent' => 15
        ], [
            'value' => 250000000,
            'percent' => 25
        ], [
            'value' => 500000000,
            'percent' => 30
        ]
    ]
];
