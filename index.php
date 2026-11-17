
<?php

$links = [
    ['nom' => 'Destination', 'url' => '#destination'],
    ['nom' => 'About us', 'url' => '#why'],
    ['nom' => 'Reviews', 'url' => '#reviews']
];

$destinations = [
    [
        'nom' => 'Marrakech',
        'image' => 'https://images.unsplash.com/photo-1597212618440-806262de4f6b?w=400',
        'description' => 'Discover the beauty of Marrakech.'
    ],
    [
        'nom' => 'Tokyo',
        'image' => 'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=400',
        'description' => 'Explore the amazing city of Tokyo.'
    ],
    [
        'nom' => 'Paris',
        'image' => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=400',
        'description' => 'Enjoy the beautiful streets of Paris.'
    ]
];

$features = [
    [
        'nom' => '✈ Explore',
        'description' => 'Discover amazing destinations.'
    ],
    [
        'nom' => '🌍 Discover',
        'description' => 'Experience different cultures.'
    ],
    [
        'nom' => '♥ Enjoy',
        'description' => 'Create unforgettable memories.'
    ]
];

$reviews = [
    [
        'nom' => 'Amine',
        'pays' => 'Morocco',
        'commentaire' => 'WorldGuide helped me discover new places.'
    ],
    [
        'nom' => 'Sarah',
        'pays' => 'France',
        'commentaire' => 'The recommendations made exploring easier.'
    ],
    [
        'nom' => 'Yuki',
        'pays' => 'Japan',
        'commentaire' => 'I discovered amazing experiences.'
    ]
];

require 'index-template.php';

