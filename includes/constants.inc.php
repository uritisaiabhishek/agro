<?php
    define('BASE_URL', rtrim('http://localhost/sharada-agro-industries/', '/'));
    define('BASE_PATH', 'C:/xampp/htdocs/sharada-agro-industries/');

    // Social Media Links
    $social_links = [
        'facebook'  => 'https://www.facebook.com/',
        'twitter'   => 'https://twitter.com/',
        'linkedin'  => 'https://www.linkedin.com/',
        'instagram' => 'https://www.instagram.com/'
    ];

    // Contact Details
    define('EMAIL', trim(''));
    define('PHONE', trim(''));
    define('ADDRESS', trim(''));

    // Product List
    $products = [
        ['name' => 'Micronutrients', 'url' => 'micronutrients'],
        ['name' => 'Organic Fertilizers & Manures', 'url' => 'organic-fertilizers-manures'],
        ['name' => 'Soil Conditioner', 'url' => 'soil-conditioner'],
        ['name' => 'Enzymes', 'url' => 'enzymes'],
        ['name' => 'Potash Derived from Molasses', 'url' => 'potash-derived-from-molasses'],
        ['name' => 'Bio Fertilizers', 'url' => 'bio-fertilizers']
    ];
?>