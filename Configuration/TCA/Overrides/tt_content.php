<?php
declare(strict_types=1);
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
defined('TYPO3') or die();

$temporaryColumns = [
    'grid_columns_small' => [
        'exclude' => 0,
        'label' => 'Column Count (mobile)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => '1',
                    'value' => '1',
                ],
                [
                    'label' => '2',
                    'value' => '2',
                ],
                [
                    'label' => '3',
                    'value' => '3',
                ],
                [
                    'label' => '4',
                    'value' => '4',
                ],
            ]
        ],
    ],
    'grid_columns_medium' => [
        'exclude' => 0,
        'label' => 'Column Count (tablet)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => '1',
                    'value' => '1',
                ],
                [
                    'label' => '2',
                    'value' => '2',
                ],
                [
                    'label' => '3',
                    'value' => '3',
                ],
                [
                    'label' => '4',
                    'value' => '4',
                ],
            ]
        ],
    ],
    'grid_columns_large' => [
        'exclude' => 0,
        'label' => 'Column Count (desktop)',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'label' => '1',
                    'value' => '1',
                ],
                [
                    'label' => '2',
                    'value' => '2',
                ],
                [
                    'label' => '3',
                    'value' => '3',
                ],
                [
                    'label' => '4',
                    'value' => '4',
                ],
            ]
        ],
    ],
];

ExtensionManagementUtility::addTCAcolumns('tt_content', $temporaryColumns);

/*
ExtensionUtility::registerPlugin(
    'Sk',
    'Contactform',
    'Contact Form'
);
*/
