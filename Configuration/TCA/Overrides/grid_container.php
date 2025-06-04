<?php
declare(strict_types=1);
use TYPO3\CMS\Core\Utility\GeneralUtility;
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'grid_container', // CType
            'Container', // label
            'Description of the Container', // description
            [
                [
                    [
                        'name' => 'Content',
                        'colPos' => 200,
                        'colspan' => 2,
                        'allowed' => [
                            'CType' => 'header, textmedia'
                            ]
                    ]
                ]
            ] // grid configuration
        )
    )
    // set an optional icon configuration
    ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
);
