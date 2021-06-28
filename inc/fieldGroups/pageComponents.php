<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'pageComponents',
        'title' => 'Page Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'pageComponents',
                'label' => __('Page Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockBlankSpace\getACFLayout(),
                    Components\BlockBoxes\getACFLayout(),
                    Components\BlockDownloads\getACFLayout(),
                    Components\BlockGlossar\getACFLayout(),
                    Components\BlockInfo\getACFLayout(),
                    Components\BlockIntroBoxes\getACFLayout(),
                    Components\BlockQuestion\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                ]
            ]
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'post'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event_privacy'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event_type'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event_condition'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event_capacity'
                ],
                [
                    'param' => 'post_type',
                    'operator' => '!=',
                    'value' => 'event_result'
                ],
            ]
        ]
    ]);
});
