<?php

namespace Flynt\Components\BlockBlankSpace;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockBlankSpace',
        'label' => 'Block: Blank Space',
        'sub_fields' => [
            [
                [
                    'label' => __('Blank Space', 'flynt'),
                    'name' => 'message',
                    'type' => 'message',
                    'message' => __('Add the Blank Space Block before your second block to have a 50% wide blank space and keep your Info Block on the right.', 'flynt'),
                    'new_lines' => 'wpautop',
                    'esc_html' => 1
                ]
            ],
        ]
    ];
}
