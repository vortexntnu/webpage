<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/user/config/site.yaml',
    'modified' => 1521112700,
    'data' => [
        'title' => 'Vortex NTNU',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Kevin',
            'email' => 'kevinkv@hotmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'ROV',
            3 => 'ntnu',
            4 => 'competition',
            5 => 'mate',
            6 => 'drone',
            7 => 'underwater'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
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
