<?php
$data = [
    [
        'name' => "Movies",
        'info' => "category_name",
        'data' => [
            [
                'name' => "Interstellar",
                'info' => "category_data",
            ],
            [
                'name' => "Dark Knight",
                'info' => "category_data"
            ]
        ],
    ],
    [
        'name' => "Music",
        'info' => "category_name",
        'data' => [
            [
                'name' => "Adams",
                'info' => "category_data",
            ],
            [
                'name' => "Nirvana",
                'info' => "category_data"
            ]
        ],
    ]
];
foreach ($data as $d) {
    foreach ($d as $s) {
        var_dump($s);
    }
}

?>