<?php

namespace Flynt\Components\BlockIntroBoxes;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockIntroBoxes',
        'label' => 'Block: Intro Boxes',
        'sub_fields' => [
            [
                'label' => __('Glossar', 'flynt'),
                'name' => 'glossarTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Guidelines', 'flynt'),
                'name' => 'guidelines',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => __('Add Box', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Icon', 'flynt'),
                        'name' => 'icon',
                        'type' => 'image',
                        'return_format' => 'array',
                        'preview_size' => 'small',
                        'required' => 0,
                        'mime_types' => 'gif,jpg,jpeg,png,svg',
                        'wrapper' => [
                            'width' => 50
                        ]
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 0,
                        'wrapper' => [
                            'width' => 50
                        ]
                    ],
                    [
                        'label' => __('Text', 'flynt'),
                        'name' => 'text',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'tabs' => 'visual',
                        'required' => 0,
                        'wrapper' => [
                            'width' => 100
                        ]
                    ],
                ]
            ],
            [
                'label' => __('Options', 'flynt'),
                'name' => 'optionsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Background Color', 'flynt'),
                'name' => 'backgroundColor',
                'type' => 'color_picker',
                'required' => 0,
                'wrapper' => [
                    'width' => 100
                ]
            ],
        ]
    ];
}
