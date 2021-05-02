<?php

return [
    'city'     => [
        'driver' => 'eloquent',
        'model'  => Cafesource\Location\Models\City::class
    ],
    'province' => [
        'driver' => 'eloquent',
        'model'  => Cafesource\Location\Models\Province::class
    ]

];