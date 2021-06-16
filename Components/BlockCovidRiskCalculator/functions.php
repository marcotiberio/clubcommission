<?php

namespace Flynt\Components\BlockCovidRiskCalculator;

use Flynt\FieldVariables;

function getACFLayout()
{
    return [
        'name' => 'BlockCovidRiskCalculator',
        'label' => 'Block: Covid Risk Calculator',
        'sub_fields' => [
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
                'required' => 0,
            ]
        ]
    ];
}
