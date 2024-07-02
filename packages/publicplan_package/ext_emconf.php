<?php

/**
 * Extension Manager/Repository config file for ext "publicplan_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Publicplan Package',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PublicplanGmbh\\PublicplanPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Anne',
    'author_email' => 'anne.ezurike@publicplan.de',
    'author_company' => 'Publicplan GmbH',
    'version' => '1.0.0',
];
