<?php

$aspectRatio = function ($constraint){
    $constraint->aspectRatio();
    $constraint->upsize();
};

return [

    'products' => [
        'thumb' => [
            'fit' => [220,220]
        ],
        '800x533' => [
            'fit' => [800,533]
        ],
        'big' => [
            'resize' => [800, 450, $aspectRatio]
        ]
    ],

    'sliders' => [
        'thumb' => [
            'fit' => [220,220]
        ],
        'big' => [
            'fit' => [1100,734]
        ]
    ],

    'abouts' => [
        'thumb' => [
            'fit' => [540,430]
        ]
    ],

    'brands' => [
        'thumb' => [
            'fit' => [150,75]
        ]
    ]

];
