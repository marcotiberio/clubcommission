<?php

namespace Flynt\Components\BlockQuestion;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockQuestion',
        'label' => 'Block: Question',
        'sub_fields' => [
            [
                
            ],
            [
                'label' => __('General', 'flynt'),
                'name' => 'generalTab',
                'type' => 'tab',
                'placement' => 'top',
                'endpoint' => 0
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'preContentHtml',
                'type' => 'text',
            ],
            [
                'label' => __('Items', 'flynt'),
                'name' => 'items',
                'type' => 'repeater',
                'min' => 1,
                'layout' => 'row',
                'button_label' => __('Add Reply', 'flynt'),
                'sub_fields' => [
                    [
                        'label' => __('Reply', 'flynt'),
                        'name' => 'reply',
                        'type' => 'text',
                    ],
                    [
                        'label' => __('Reply Page Link', 'flynt'),
                        'name' => 'replyPageLink',
                        'type' => 'page_link',
                        'required' => 0,
                        'post_type' => '',
                        'taxonomy' => '',
                        'allow_null' => 0,
                        'allow_archives' => 1,
                        'multiple' => 0,
                    ]
                ]
            ]
        ]
    ];
}
