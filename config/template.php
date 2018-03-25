<?php

/**
 * 模版最终为 $template['theme_namespace'] . '::' . $templateType .'.' . $template['templates'][$templateType]['file_name'];
 * 例如 默认单页模板 最终为 theme::page.default
 */
return [

    'theme_namespace' => 'theme',

    'current_theme_path' => resource_path('views/footprint'),

    'templates' => [
        // 单页模板
        'page' => [
            [
                'file_name' => 'default',
                'title' => '默认单页模板',
                'default' => true
            ]
        ],
        // 列表模板
        'list' => [
            [
                'file_name' => 'about',
                'title' => '关于我模板',

            ],
            [
                'file_name' => 'close_up',
                'title' => '特写模板',
            ],
            [
                'file_name' => 'Works',
                'title' => '作品模板',
            ],
            [
                'file_name' => 'blog',
                'title' => '博客模板',
            ],
        ],
        // 频道模板
        'channel' => [
            [
                'file_name' => 'default',
                'title' => '默认列表模板',
                'default' => true
            ]
        ],
        // 正文模板
        'content' => [
            [
                'file_name' => 'default',
                'title' => '默认正文模板',
                'default' => true
            ]
        ],
    ]
];
