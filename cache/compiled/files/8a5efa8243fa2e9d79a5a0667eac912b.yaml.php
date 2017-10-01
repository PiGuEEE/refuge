<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/refuge/user/config/site.yaml',
    'modified' => 1506898537,
    'data' => [
        'title' => 'Refuge',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Arthur Finkler',
            'email' => 'refugethegame@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'abstract' => 'Refuge, the Game that simulates a journey of refugees trying to escape for their lives.',
            'summary' => 'Refuge, the Game that simulates a journey of refugees trying to escape for their lives.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
