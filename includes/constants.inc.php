<?php
    // define('BASE_URL', rtrim('https://sharadaagro.com', '/'));
    define('BASE_URL', rtrim('http://localhost/agro', '/'));
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
    define('PHONE1', '+91 7680881760');
    define('PHONE2', '+91 9440008816');
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
                    'image' => 'zinc-sulphate-monohydrate.jpeg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                ],
                [
                    'name' => 'Magnesium Sulphate Heptahydrate 9.6%',
                    'url' => 'magnesium-sulphate-heptahydrate-9-6',
                    'image' => 'magnesium-sulphate-heptahydrate-9-6.jpeg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                ],
                [
                    'name' => 'Zinc Sulphate Heptahydrate 21%',
                    'url' => 'zinc-sulphate-heptahydrate-21',
                    'image' => 'zinc-sulphate-heptahydrate-21.jpeg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                ],
                [
                    'name' => 'Zinc Sulphate Monohydrate 33%',
                    'url' => 'zinc-sulphate-monohydrate-33',
                    'image' => 'zinc-sulphate-monohydrate-33.jpeg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                ],
                [
                    'name' => 'Zinc Sulphate Monohydrate 33% Granules -FCO',
                    'url' => 'zinc-sulphate-monohydrate-23-granules-fco',
                    'image' => 'zinc-sulphate-monohydrate-23-granules-fco.jpeg',
                    'description' => 'Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is prime nutrient for plants. This micro-nutrient is primarily used in maintaining normal health and increased yields, The Zinc Sulphate is applied directly to the crops.',
                ],
                [
                    'name' => 'Copper sulphate',
                    'url' => 'copper-sulphate',
                    'image' => 'copper-sulphate.jpeg',
                    'description' => 'Copper Sulphate is an essential micronutrient product designed to promote healthy plant growth by providing copper, a vital trace element required for various plant functions. Perfect for use in gardens, lawns, and agricultural settings, Copper Sulfate supports strong root development, enhances photosynthesis, and improves disease resistance, ensuring your plants thrive in all conditions.',
                ],
                [
                    'name' => 'Ferrous sulphate',
                    'url' => 'ferrous-sulphate',
                    'image' => 'fferrous-sulphate.jpeg',
                    'description' => 'Ferrous Sulphate is a highly effective micronutrient designed to correct iron  deficiencies in plants, promoting vibrant green growth and robust development. Ideal for use in gardens, lawns, and agricultural applications, Ferrous Sulphate is an essential source of iron that helps plants thrive by supporting healthy photosynthesis and overall vitality.',
                ],
            ]
        ],
        [
            'name' => 'Organic Fertilizers & Manures', 
            'url' => 'organic-fertilizers-manures',
            "products"=> [
                [
                    "name"=> "Zinc Sulphate Monohydrate",
                    "url"=> "zinc-sulphate-monohydrate",
                    "image"=> "zinc-sulphate-monohydrate.jpeg",
                    "description"=> "Zinc Sulphate Monohydrate is a white, fine crystalline powder or a pearl shaped product. It is a prime nutrient for plants and primarily used in maintaining normal health and increased yields. The Zinc Sulphate is applied directly to the crops.",
                ],
                [
                    "name"=> "Fermented Organic Manure (FOM) (Bhoomi-Aushadam)",
                    "url"=> "fermented-organic-manure",
                    "image"=> "fermented-organic-manure.jpeg",
                    "description"=> "Fermented Organic Manure is a high-quality, eco-friendly soil conditioner designed to improve soil health and enhance plant growth. Made from natural, organic materials that undergo a controlled fermentation process.",
                ],
                [
                    "name"=> "Organic Manure (OM) (Bhoomi Shakthi)",
                    "description"=> "Bio-Enriched Organic Manure is a plentiful source of carbon for the soil, rich in NPK after enrichment with Bio Cultures like Nitrogen Fixing Bacteria and Phosphorous Solubilizing Bacteria.",
                    "url"=> "organic-manure",
                    "image"=> "organic-manure.jpeg",
                ],
                [
                    "name"=> "Phosphate Rich Organic Manure (PROM) (Grow Rich)",
                    "description"=> "Phosphate Rich Organic Manure (PROM) is a natural, nutrient-rich fertilizer designed to improve soil fertility and provide essential phosphorus to plants.",
                    "url"=> "phosphate-rich-organic-manure",
                    "image"=> "phosphate-rich-organic-manure.jpeg",
                ],
                [
                    "name"=> "Vermi Compost (Tara Shakthi)",
                    "description"=> "Vermi Compost is a high-quality, nutrient-rich organic fertilizer created through the composting of organic waste with the help of earthworms.",
                    "url"=> "vermi-compost",
                    "image"=> "vermi-compost.jpeg",
                ],
                [
                    "name"=> "Bio Enriched Organic Manure",
                    "description"=> "A premium, eco-friendly fertilizer that boosts soil fertility and promotes healthy plant growth by combining organic matter with beneficial microorganisms.",
                    "url"=> "bio-enriched-organic-manure",
                    "image"=> "bio-enriched-organic-manure.jpeg",
                ],
                [
                    "name"=> "Bhoomi-Nestham",
                    "description"=> "A premium organic fertilizer designed to promote optimal plant growth, enrich soil, and improve overall plant health.",
                    "url"=> "bhoomi-nestham",
                    "image"=> "bhoomi-nestham.jpeg",
                ],
                [
                    "name"=> "City Compost (Karbon Shakthi)",
                    "description"=> "City Compost is a bio-organic soil enricher made from biodegradable organic substances segregated from city municipal waste.",
                    "url"=> "city-compost",
                    "image"=> "city-compost.jpeg",
                ],
                [
                    "name"=> "Pressmud Compost (Karbon Rich)",
                    "description"=> "Pressmud Compost is an organic fertilizer made from the byproduct of sugarcane processing, enriched with essential nutrients.",
                    "url"=> "pressmud-compost",
                    "image"=> "press-mud-compost.jpeg",
                ]
            ]
        ],
        [
            'name' => 'Soil Conditioner', 
            'url' => 'soil-conditioner',
            "products"=> [
                [
                    "name"=> "Tripower (CMS) calcium magnesium sulfur",
                    "url"=> "tripower-calcium-magnesium-sulfur",
                    "image"=> "tripower-calcium-magnesium-sulfur.jpeg",
                    "description"=> "Tripower (CMS) is a highly effective, nutrient-rich fertilizer that combines three essential elements—calcium, magnesium, and sulfur—into one powerful product. Designed to address common soil deficiencies and promote strong, healthy plant growth, Tripower (CMS) helps enhance nutrient uptake, improve soil structure, and support plant vitality. Whether you're growing vegetables, fruits, or ornamental plants, Tripower (CMS) ensures your plants receive the critical nutrients they need for optimal growth and development.",
                ],
                [
                    "name"=> "Phospho Gypsum Granular Granulated Gypsum",
                    "url"=> "phospho-gypsum-granular-granulated-gypsum",
                    "image"=> "phospho-gypsum-granular-granulated-gypsum.jpeg",
                    "description"=> "Phospho Gypsum Granular is a premium soil amendment made from gypsum that has been enriched with phosphorous content. This specially formulated product provides an effective and sustainable solution for improving soil structure, enhancing nutrient availability, and supporting overall plant health. The granulated form makes it easy to apply, ensuring uniform distribution for optimal results. Ideal for agricultural fields, gardens, and landscapes, Phospho Gypsum Granular is your go-to solution for boosting soil fertility and promoting healthy crop growth.",
                ],
                [
                    "name"=> "Agri lime (pH Nutralizer) Granulated agricultural lime",
                    "url"=> "agri-lime-granulated-agricultural-lime",
                    "image"=> "agri-lime-granulated-agricultural-lime.jpeg",
                    "description"=> "Agri Lime is a finely ground, granulated product designed to neutralize acidic soils and promote healthier plant growth. Ideal for agricultural fields, gardens, and lawns, Agri Lime effectively raises soil pH, making nutrients more available to plants and improving overall soil structure. This product is essential for correcting soil acidity, which can otherwise hinder plant development and nutrient uptake",
                ],
            ]
        ],
        [
            'name' => 'Enzymes', 
            'url' => 'enzymes',
            "products"=> [
                [
                    "name"=> "Taramino (Bio – organic nutritional product)",
                    "url"=> "taramino",
                    "image"=> "taramino.jpeg",
                    "description"=> "TARAMINO is a potential formulation as Crop Booster to enhance farm productivity substantially and also to reduce Nitrogen/Urea applications to the extent of 25 -30%, It is a mixture of “Vegetables & Cereal & Proteins which are being hydrolyzed with Enzymatic conversion to manufacture Protein Hydrolysates (Amino acids). Taramino is available in both Granules and Liquid form. COMPOSITION TARAMINO contains total dissolved solids 40%  2.0%, hydrolyzed protein (amino acid %w/v) 10  1.0% and hydrolyzed carbohydrates 6.0  0.5%, total nitrogen 3.5 0.3%, Specific gravity 1.08 0.02 and pH 1.2  0.1, Other organic gluconate, lactate and protein of magnesium (Mg), potash (k), Zinc (Zn), Iron(Fe), and Boron (B)4  0.3%.",
                ],
                [
                    "name"=> "Humic Granules",
                    "url"=> "Humic Granules",
                    "image"=> "humic-granules.jpeg",
                    "description"=> "Humic Granules are a natural soil conditioner. It has a unique carbon matrix which includes a high concentration of trace minerals an organic acids.",
                ],
                [
                    "name"=> "Sea weed extract granules",
                    "url"=> "sea-weed-extract-granules",
                    "image"=> "sea-weed-extract-granules.jpeg",
                    "description"=> "Seaweed extract granules is a 100% natural, water- soluble, liquid organic bio fertilizer containing micro and  macro nutrients. Seaweed extract also benefits in flower set and fruit production.",
                ],
            ]
        ],
        [
            'name' => 'Potash Derived from Molasses', 
            'url' => 'potash-derived-from-molasses',
            "products"=> [
                [
                    "name"=> "BHU-swamy",
                    "url"=> "bhu-swamy",
                    "image"=> "bhu-swamy.jpeg",
                    "description"=> "BHU-Swamy is a high-quality, organic soil conditioner designed to enhance soil health, improve plant growth, and promote sustainable farming practices. Made from carefully selected natural ingredients, BHU-Swamy is packed with essential nutrients, organic matter, and beneficial microorganisms to foster a fertile and thriving soil environment. Whether you're involved in organic farming, gardening, or landscaping, BHU-Swamy is the ideal solution to nourish your soil and enhance plant health, ensuring long-term fertility and productivity.",
                ],
            ]
        ],
        [
            'name' => 'Bio Fertilizers', 
            'url' => 'bio-fertilizers',
            "products"=> [
                [
                    "name"=> "Rhizobium",
                    "url"=> "rhizobium",
                    "image"=> "rhizobium.jpeg",
                    "description"=> "Rhizobium is a naturally occurring, nitrogen-fixing bacterium that plays a crucial role in improving soil fertility and promoting healthy plant growth. This powerful bio-inoculant helps plants, particularly legumes, form a symbiotic relationship with the soil, enabling them to fix atmospheric nitrogen into a form that is easily absorbed and utilized by plants. Ideal for organic farming, gardening, and agriculture, Rhizobium enhances nutrient availability, improves soil health, and increases crop yields without the need for synthetic fertilizers.",
                ],
                [
                    "name"=> "Azotobacter",
                    "url"=> "azotobacter",
                    "image"=> "azotobacter.jpeg",
                    "description"=> "Azotobacter is a beneficial soil bacterium known for its ability to fix atmospheric nitrogen, making it an essential bio-inoculant for improving soil fertility and supporting healthy plant growth. Unlike other nitrogen-fixing bacteria that are specific to legumes, Azotobacter works in a wide variety of non-leguminous plants, promoting stronger root systems, enhanced nutrient uptake, and increased crop yields. Perfect for organic farming, gardening, and sustainable agriculture, Azotobacter provides a natural alternative to synthetic fertilizers, enriching your soil and fostering eco-friendly growing practices.",
                ],
                [
                    "name"=> "Azospirillum",
                    "url"=> "azospirillum",
                    "image"=> "azospirillum.jpeg",
                    "description"=> "Azospirillum is a beneficial soil bacterium known for its ability to fix nitrogen and enhance plant growth. This free-living nitrogen-fixing bacterium is effective for a wide range of crops, including cereals, vegetables, and grasses, by improving soil health, promoting root development, and increasing crop yields. Azospirillum works in symbiosis with plants, helping them access nitrogen from the atmosphere and optimizing nutrient uptake, making it an essential tool for sustainable farming and organic gardening practices. By reducing the need for synthetic fertilizers, Azospirillum contributes to a more eco-friendly, natural approach to farming.",
                ],
                [
                    "name"=> "Phosphate Solubilising Bacteria (PSB)",
                    "url"=> "phosphate-solubilising-bacteria",
                    "image"=> "phosphate-solubilising-bacteria.jpeg",
                    "description"=> "Unlock Soil Phosphorus and Boost Plant Growth with Phosphate Solubilizing Bacteria (PSB) Phosphate Solubilizing Bacteria (PSB) are beneficial microorganisms that help unlock and solubilize the phosphorus present in the soil, making it more accessible to plants. Phosphorus is a vital nutrient that plays a key role in root development, flower formation, fruiting, and overall plant health. However, much of the phosphorus in the soil is often bound in insoluble forms, making it unavailable to plants. PSB works by breaking down these insoluble phosphorus compounds, converting them into a form that plants can readily absorb. This enhances nutrient uptake, improves soil fertility, and promotes healthy plant growth.",
                ],
                [
                    "name"=> "Acetobacter",
                    "url"=> "acetobacter",
                    "image"=> "acetobacter.jpeg",
                    "description"=> "Boost Soil Fertility and Promote Healthy Plant Growth with Acetobacter. Acetobacter is a beneficial, nitrogen-fixing bacterium known for its ability to enhance soil fertility and support plant growth. These bacteria play a vital role in the biological nitrogen fixation process, helping plants access nitrogen, an essential nutrient for their development. Acetobacter is particularly effective in improving soil health by promoting nutrient cycling and facilitating the breakdown of organic matter. By reducing the need for synthetic nitrogen fertilizers, Acetobacter contributes to more sustainable, eco-friendly farming and gardening practices.",
                ],
                [
                    "name"=> "Potassium Mobilizing Biofertilizers (KMB)",
                    "url"=> "potassium-mobilizing-biofertilizers",
                    "image"=> "potassium-mobilizing-biofertilizers.jpeg",
                    "description"=> "Potassium Mobilizing Biofertilizers (KMB) - Product Description Enhance Potassium Availability and Boost Plant Health with Potassium Mobilizing Biofertilizers (KMB) Potassium Mobilizing Biofertilizers (KMB) are specialized bio-inoculants that enhance the availability of potassium in the soil, making it more accessible to plants. Potassium is a vital nutrient that plays a crucial role in plant processes such as photosynthesis, water regulation, enzyme activation, and overall plant health. However, much of the potassium in the soil can be in forms that are not easily accessible to plants. KMB bacteria help solubilize and mobilize potassium, converting it into plant-available forms, leading to improved plant growth, better yields, and more resilient crops.",
                ],
                [
                    "name"=> "Micorrhizal Biofertilizers",
                    "url"=> "micorrhizal-biofertilizers",
                    "image"=> "micorrhizal-biofertilizers.jpeg",
                    "description"=> "Enhance Soil Fertility and Boost Plant Growth with Mycorrhizal Biofertilizers Mycorrhizal Biofertilizers are a natural and eco-friendly solution that promotes plant growth and improves soil fertility through the power of mycorrhizal fungi. These fungi form a symbiotic relationship with plant roots, enhancing nutrient and water uptake, increasing root mass, and improving plant health. Mycorrhizal fungi are crucial for facilitating the uptake of essential nutrients like phosphorus, zinc, and other micronutrients, which are often limited in the soil. By using Mycorrhizal Biofertilizers, you can enhance soil structure, improve plant resilience, and boost yields, all while promoting sustainable and organic farming practices.",
                ],
            ]
        ]
    ];
?>