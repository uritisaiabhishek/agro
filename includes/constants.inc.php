<?php
    define('BASE_URL', rtrim('https://sharadaagro.com', '/'));
    define('BASE_PATH', '/');

    // Social Media Links
    $social_links = [
        'facebook'  => 'https://www.facebook.com/',
        'twitter'   => 'https://twitter.com/',
        'linkedin'  => 'https://www.linkedin.com/',
        'instagram' => 'https://www.instagram.com/'
    ];

    // Contact Details
    define('SITE_EMAIL', trim('contact@sharadaagro.com'));
    define('PHONE', trim(''));
    define('ADDRESS', trim(''));

    // Product List
    $products_list = [
        [
            'name' => 'Micronutrients', 
            'url' => 'micronutrients', 
            'products' => [
                [
                    'name' => 'Zinc Sulphate Monohydrate',
                    'url' => 'zinc-sulphate-monohydrate',
                    'image' => 'zinc-sulphate-monohydrate.jpg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                    'specifications' => [
                        'Zinc (as Zn) - 33% Min',
                        'Zinc (as Zn) - 21% Min',
                        'Zinc (as Zn) - 12% Min',
                        'Zinc (as Zn) - 9% Min',
                        'Zinc (as Zn) - 4% Min'
                    ],
                    'packing' => '50 Kg HDPE Bag',
                    'application' => 'Foliar Spray, Soil Application',
                    'benefits' => [
                        'It is used as a fertilizer additive for preventing and correcting zinc deficiencies in crops.',
                        'It helps in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                        'It is a prime nutrient for plants.',
                        'It is used in animal feed to correct zinc deficiencies.'
                    ],
                    'usage' => '1-2 Kg per acre',
                    'price' => '₹ 50/Kg',
                    'stock' => 'Available'
                ],
            ]
        ],
        ['name' => 'Organic Fertilizers & Manures', 'url' => 'organic-fertilizers-manures'],
        ['name' => 'Soil Conditioner', 'url' => 'soil-conditioner'],
        ['name' => 'Enzymes', 'url' => 'enzymes'],
        ['name' => 'Potash Derived from Molasses', 'url' => 'potash-derived-from-molasses'],
        ['name' => 'Bio Fertilizers', 'url' => 'bio-fertilizers']
    ];
?>