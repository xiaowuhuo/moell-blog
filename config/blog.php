<?php

return [
    'uploads' => [
        'storage' => 'upload',
        'webPath' => '/uploads'
    ],
    'system_key' => [
        'blog_name',
        'motto',
        'title',
        'seo_keyword',
        'seo_desc',
        'icp',
        'github_url',
        'weibo_url',
        'disqus_short_name',
        'duoshuo_short_name',
        'comment_plugin',
        'statistics_script'
    ],
    'menu' => [
        [
            'backend.home' => [
                'icon'  => 'fa fa-home',
                'name'  => 'Home'
            ]

        ],
        [
            'tree_title' => [
                'icon' => 'fa fa-files-o',
                'name' => '文章'
            ],
            'backend.article.index' => [
                'icon' => '',
                'name' => '文章管理'
            ],
            'backend.article.create' => [
                'icon' => '',
                'name' => '发布文章'
            ],
            'backend.category.index' => [
                'icon' => '',
                'name' => '文章分类'
            ]
        ],
        [
            'backend.tag.index' => [
                'icon' => 'fa fa-tags',
                'name' => '标签'
            ]
        ],
        [
            'backend.navigation.index' => [
                'icon' => 'fa fa-navicon',
                'name' => '导航'
            ]
        ]
    ]
];