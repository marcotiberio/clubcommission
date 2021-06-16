<?php

namespace Flynt\Components\BlockGlossar;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockGlossar',
        'label' => 'Block: Glossar',
        'sub_fields' => [
            [
                'label' => __('Glossar', 'flynt'),
                'name' => 'glossarTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Terms', 'flynt'),
                'name' => 'terms',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'block',
                'button_label' => __('Add Term', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Word', 'flynt'),
                        'name' => 'word',
                        'type' => 'text',
                        'wrapper' => [
                            'width' => 50
                        ]
                    ],
                    [
                        'label' => __('Definition', 'flynt'),
                        'name' => 'definition',
                        'type' => 'wysiwyg',
                        'delay' => 1,
                        'media_upload' => 0,
                        'tabs' => 'visual',
                        'required' => 0,
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
