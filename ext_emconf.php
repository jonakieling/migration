<?php

//#######################################################################
// Extension Manager/Repository config file for ext "in2template".
//#######################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'migration',
    'description' => 'This extension is a framework extension for any kind of database-migrations',
    'category' => 'misc',
    'author' => 'in2code GmbH',
    'author_email' => 'service@in2code.de',
    'dependencies' => 'extbase, fluid',
    'state' => 'stable',
    'author_company' => 'in2code GmbH',
    'version' => '8.ß.1',
    'autoload' => [
        'psr-4' => ['In2code\\Migration\\' => 'Classes']
    ],
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
