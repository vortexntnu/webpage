<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/3/v/vortexntnu/www/user/plugins/shortcode-core/blueprints.yaml',
    'modified' => 1535220970,
    'data' => [
        'name' => 'Shortcode Core',
        'version' => '2.7.1',
        'description' => 'This plugin provides the core functionality for shortcode plugins',
        'icon' => 'code',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-shortcode-core',
        'demo' => 'http://learn.getgrav.org',
        'keywords' => 'gui, plugin, tabs, twig',
        'bugs' => 'https://github.com/getgrav/grav-plugin-shortcode-core/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '~1.1'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active' => [
                    'type' => 'toggle',
                    'label' => 'Activated',
                    'help' => 'Site-Wide activation',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'active_admin' => [
                    'type' => 'toggle',
                    'label' => 'Activated in admin',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'parser' => [
                    'type' => 'select',
                    'size' => 'medium',
                    'classes' => 'fancy',
                    'label' => 'Processor',
                    'help' => 'Which built-in processor to use. WordPress (fastest), Regular (customizable), Regex (solid)',
                    'options' => [
                        'wordpress' => 'WordpressParser',
                        'regex' => 'RegexParser',
                        'regular' => 'RegularParser'
                    ]
                ],
                'custom_shortcodes' => [
                    'type' => 'text',
                    'label' => 'Custom Shortcodes',
                    'help' => 'The path to a location where you store custom shortcodes.',
                    'placeholder' => '/user/custom/shortcodes',
                    'size' => 'large'
                ],
                'fontawesome.load' => [
                    'type' => 'toggle',
                    'label' => 'Load Fontawesome Library',
                    'help' => 'Used by the `safe-email` shortcode if your theme doesn\'t already load it',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'fontawesome.url' => [
                    'type' => 'text',
                    'label' => 'Fontawesome URL',
                    'help' => 'You can change the location of fontawesome by changing this URL',
                    'size' => 'large'
                ]
            ]
        ]
    ]
];
