<?php

$EM_CONF['ew_llxml2xliff'] = [
    'title' => 'Converting llxml to xliff',
    'description' => 'Provides a backend module to convert locallang.xml and locallang.php files
    to xliff. For every language, contained in the source file, an extra file gets created.',
    'category' => 'module',
    'author' => 'Sebastian Fischer',
    'author_email' => 'typo3@evoweb.de',
    'author_company' => 'evoWeb',
    'state' => 'stable',
    'version' => '4.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.0-11.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
