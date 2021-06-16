<?php

namespace Flynt\Components\BlockDownloads;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockDownloads',
        'label' => 'Block: Downloads',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'wysiwyg',
                'tabs' => 'visual',
                'media_upload' => 0,
                'delay' => 1
            ],
            [
                'label' => __('Downloads', 'flynt'),
                'name' => 'downloadsTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Downloads', 'flynt'),
                'name' => 'downloads',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => __('Add Item', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'wrapper' => [
                            'width' => 50
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
