<?php

use ACFComposer\ACFComposer;
use Flynt\Components;

add_action('Flynt/afterRegisterComponents', function () {
    ACFComposer::registerFieldGroup([
        'name' => 'eventTypeComponents',
        'title' => 'Components',
        'style' => 'seamless',
        'fields' => [
            [
                'name' => 'eventTypeComponents',
                'label' => __('Components', 'flynt'),
                'type' => 'flexible_content',
                'button_label' => __('Add Component', 'flynt'),
                'layouts' => [
                    Components\BlockQuestion\getACFLayout()
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event_type',
                ],
            ],
            
        ],
    ]);
});
