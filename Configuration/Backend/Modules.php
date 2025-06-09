<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

return [
    'site_business_theme_import' => [
        'parent' => 'site',
        'position' => [],
        'access' => 'admin',
        'path' => '/module/site/business-theme-import',
        'extensionName' => 'BusinessTheme',
        'iconIdentifier' => 'business-theme-import-icon',
        'labels' => 'LLL:EXT:business_theme/Resources/Private/Language/locallang_module.xlf',
        'controllerActions' => [
            SIMONKOEHLER\BusinessTheme\Controller\ImportController::class => [
                'import',
            ],
        ],
    ],
];
