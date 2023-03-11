<?php

declare(strict_types=1);

function catalogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name'        => 'Beaches',
            'url'         => 'beaches',
            'posts'    => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name'        => 'Volcanoes',
            'url'         => 'volcanoes',
            'posts'    => [4, 5, 6]
        ],
        3 => [
            'category_id' => 3,
            'name'        => 'Waterfalls',
            'url'         => 'waterfalls',
            'posts'    => [7, 8, 9]
        ]
    ];
}

function catalogGetPost(): array
{
    return [
        1 => [
            'post_id'  => 1,
            'name'        => 'Post1',
            'url'         => 'product-1',
            'description' => 'Post1 Description',
        ],
        2 => [
            'post_id'  => 2,
            'name'        => 'Post2',
            'url'         => 'product-2',
            'description' => 'Post2 Description',
        ],
        3 => [
            'post_id'  => 3,
            'name'        => 'Post3',
            'url'         => 'product-3',
            'description' => 'Post3 Description',
        ],
        4 => [
            'post_id'  => 4,
            'name'        => 'Post4',
            'url'         => 'product-4',
            'description' => 'Post4 Description',
        ],
        5 => [
            'post_id'  => 5,
            'name'        => 'Post5',
            'url'         => 'product-5',
            'description' => 'Post5 Description',
        ],
        6 => [
            'post_id'  => 6,
            'name'        => 'Post6',
            'url'         => 'product-6',
            'description' => 'Post6 Description',
        ]
        ,
        7 => [
            'post_id'  => 7,
            'name'        => 'Post7',
            'url'         => 'product-7',
            'description' => 'Post7 Description',
        ]
        ,
        8 => [
            'post_id'  => 8,
            'name'        => 'Post8',
            'url'         => 'product-8',
            'description' => 'Post8 Description',
        ]
        ,
        9 => [
            'post_id'  => 9,
            'name'        => 'Post9',
            'url'         => 'product-9',
            'description' => 'Post9 Description',
        ]
    ];
}