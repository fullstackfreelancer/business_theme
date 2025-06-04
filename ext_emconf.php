<?php

$EM_CONF['business_theme'] = [
    'title' => 'Business Theme',
    'description' => 'Modern business theme for TYPO3',
    'category' => 'plugin',
    'author' => 'Simon Kohler',
    'author_email' => 'simon@kohlercode.com',
    'author_company' => 'KOHLERCODE',
    'state' => 'alpha',
    'version' => '0.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.4.99',
            'php' => '8.2.0-8.4.99',
            'container' => '3.1.0-3.1.99',
            'ws_scss' => '13.1.4-13.1.99',
            'content_blocks' => '1.3.4-1.3.99',
            'content_blocks_bootstrap' => '0.0.1-1.0.0'
        ],
        'conflicts' => [
            'bootstrap_package' => '*',
            'fluid_styled_content' => '*',
        ],
        'suggests' => [

        ],
    ],
];
