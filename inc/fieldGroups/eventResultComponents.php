<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventResultComponents',
        'title' => 'Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventResultComponents',
                'label' => __('Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockBlankSpace\getACFLayout(),
                    Components\BlockInfo\getACFLayout(),
                    Components\BlockQuestion\getACFLayout(),
                    Components\BlockWysiwyg\getACFLayout(),
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event_result',
                ],
            ],
            
        ],
    ]);
});
