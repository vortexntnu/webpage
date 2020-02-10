<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Library/WebServer/Documents/vortex-master/user/plugins/social-media-links/blueprints.yaml',
    'modified' => 1580948257,
    'data' => [
        'name' => 'Social Media Links',
        'version' => '1.0.2',
        'description' => 'Add links to social media sites',
        'icon' => 'plug',
        'author' => [
            'name' => 'Torsten Sauer',
            'email' => 'grav-dev@torsten-sauer.de'
        ],
        'homepage' => 'https://github.com/torsten-sauer/social-media-links',
        'demo' => 'https://github.com/torsten-sauer/social-media-links',
        'keywords' => 'grav, plugin, social, media, facebook, twitter, instagram',
        'bugs' => 'https://github.com/torsten-sauer/social-media-links/issues',
        'docs' => 'https://github.com/torsten-sauer/social-media-links/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'built_in_css' => [
                    'type' => 'toggle',
                    'label' => 'Use Built in CSS',
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
                'Social Pages' => [
                    'type' => 'section',
                    'title' => 'Social Pages',
                    'underline' => true
                ],
                'social_pages_types' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'title' => 'Pages',
                    'fields' => [
                        'facebook' => [
                            'type' => 'tab',
                            'title' => 'Facebook',
                            'fields' => [
                                'social_pages.pages.facebook.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'facebook',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Facebook Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Facebook',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.facebook.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 1,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'twitter' => [
                            'type' => 'tab',
                            'title' => 'Twitter',
                            'fields' => [
                                'social_pages.pages.twitter.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'twitter',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.twitter.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Twitter Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.twitter.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Twitter',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.twitter.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 2,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'pinterest' => [
                            'type' => 'tab',
                            'title' => 'Pinterest',
                            'fields' => [
                                'social_pages.pages.pinterest.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'pinterest',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.pinterest.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Pinterest Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.pinterest.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Pinterest',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.pinterest.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 3,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'instagram' => [
                            'type' => 'tab',
                            'title' => 'Instagram',
                            'fields' => [
                                'social_pages.pages.instagram.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'instagram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.url' => [
                                    'type' => 'url',
                                    'label' => 'Your Instagram Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'Instagram',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.instagram.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 4,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'github' => [
                            'type' => 'tab',
                            'title' => 'GitHub',
                            'fields' => [
                                'social_pages.pages.github.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'github',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.github.url' => [
                                    'type' => 'url',
                                    'label' => 'Your GitHub Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.github.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'GitHub',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.github.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 5,
                                    'validate' => NULL
                                ]
                            ]
                        ],
                        'linkedin' => [
                            'type' => 'tab',
                            'title' => 'LinkedIn',
                            'fields' => [
                                'social_pages.pages.linkedin.icon' => [
                                    'type' => 'text',
                                    'size' => 'small',
                                    'label' => 'Font Awesome Icon',
                                    'default' => 'linkedin',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.linkedin.url' => [
                                    'type' => 'url',
                                    'label' => 'Your LinkedIn Profile URL',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.linkedin.title' => [
                                    'type' => 'text',
                                    'label' => 'Title when icon hovered (optional)',
                                    'default' => 'LinkedIn',
                                    'validate' => NULL
                                ],
                                'social_pages.pages.linkedin.position' => [
                                    'type' => 'text',
                                    'size' => 'x-small',
                                    'label' => 'Position',
                                    'default' => 6,
                                    'validate' => NULL
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
