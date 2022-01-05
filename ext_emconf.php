<?php

/**
 * Extension Manager/Repository config file for ext "netzweber_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'netzweber sitepackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Netzweber\\NetzweberSitepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Taissa Muntaniol',
    'author_email' => 'taissa.muntaniol@netzweber.de',
    'author_company' => 'netzweber',
    'version' => '1.0.0',
];
