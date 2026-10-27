<?php

return [
    'name' => 'Natura Folia Export',

    'office' => 'JL T1, Tebet, South Jakarta, Indonesia 12830',
    'phone' => '+62 813 1535 3425',
    'whatsapp' => '6281315353425',
    'email' => 'naturafoliaexport@gmail.com',

    'registration' => [
        'Legal Business Entity' => 'AHU-009377.AH.01.30.Tahun 2025',
        'Business Identification Number (NIB)' => '3006250034235',
        'Company Tax Identification' => '1000 0000 0280 6859',
    ],

    'products' => [
        [
            'slug' => 'shisha',
            'name' => 'Charcoal Briquette Shisha Grade',
            'tagline' => 'Clean-burning cubes made for long, consistent sessions.',
            'images' => ['images/shisha-cubes.jpg', 'images/shisha-warehouse.png'],
            'specs' => [
                'Ash Content' => '2 – 2.5%',
                'Fixed Carbon' => '75 – 80%',
                'Moisture Content' => '5%',
                'Burning Time' => '2 hours (120 minutes)',
                'Caloric Value' => '7,000 kcal',
                'Ignition Time' => '8 – 10 minutes',
                'Size' => '25 x 25 x 25 cm',
            ],
        ],
        [
            'slug' => 'bbq',
            'name' => 'BBQ Charcoal Briquette',
            'tagline' => 'Hexagonal briquettes with high heat output for grilling.',
            'images' => ['images/bbq-hexagonal.jpg', 'images/bbq-warehouse.png'],
            'specs' => [
                'Ash Content' => '8%',
                'Fixed Carbon' => '70%',
                'Moisture Content' => '5%',
                'Caloric Value' => '6,500 – 6,700 kcal',
            ],
        ],
    ],

    'payment_options' => [
        [
            'title' => 'Telegraphic Transfer (T/T)',
            'text' => 'Advance payments and staged payment arrangements may be considered, subject to mutual agreement and the terms stated in the sales contract.',
        ],
        [
            'title' => 'Letter of Credit (L/C)',
            'text' => 'Documentary letters of credit may be considered for eligible transactions, subject to bank approval, supplier capability, and mutually agreed documentary requirements.',
        ],
        [
            'title' => 'Customized Payment Terms',
            'text' => 'For qualified business transactions, alternative payment arrangements may be discussed following buyer verification, supplier confirmation, and risk assessment.',
        ],
    ],

    'models' => [
        [
            'title' => 'Export Trading',
            'text' => 'Natura Folia Export sources products from selected Indonesian manufacturers and coordinates sales to international buyers. Product specifications, pricing, quality requirements, delivery terms, and payment arrangements are confirmed before an order is finalized.',
        ],
        [
            'title' => 'Supplier–Buyer Matching',
            'text' => 'We connect suitable manufacturers with potential international buyers based on product requirements, target markets, and supply capabilities. Any introduction fee or commission is subject to a separate written agreement.',
        ],
        [
            'title' => 'Sourcing & Export Coordination',
            'text' => 'We assist with product sourcing, supplier communication, sample coordination, specification confirmation, and export-shipment coordination, according to the agreed scope of services.',
        ],
    ],

    'process' => [
        ['Initial Inquiry', 'Share your product requirements, target quantity, destination, and preferred delivery terms.'],
        ['Supplier & Product Verification', 'We assess product availability, specifications, pricing, and supplier capability.'],
        ['Quotation & Agreement', 'Both parties review the quotation, responsibilities, payment terms, and delivery conditions.'],
        ['Order Confirmation', 'Production or order fulfillment begins after the agreed conditions are satisfied.'],
        ['Shipment Coordination', 'Documentation, logistics, and shipment arrangements are coordinated according to the contract.'],
    ],
];
