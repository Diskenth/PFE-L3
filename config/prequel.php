<?php

return [

    
    'enabled' => env('PREQUEL_ENABLED', true),


   
    'path'    => 'prequel',

    
    'DB'      => [
        'CONNECTION' => env('DB_CONNECTION', 'mysql'),
        'HOST'       => env('DB_HOST', '127.0.0.1'),
        'PORT'       => env('DB_PORT', '3306'),
        'DATABASE'   => env('DB_DATABASE', 'homestead'),
        'USERNAME'   => env('DB_USERNAME', 'homestead'),
        'PASSWORD'   => env('DB_PASSWORD', 'secret'),
    ],

    
    'ignored' => [
        // 'information_schema'  => ['*'],
        // 'sys'                 => ['*'],
        // 'performance_schema'  => ['*'],
        // 'mysql'               => ['*'],
        '#mysql50#lost+found' => ['*'],
        'bookeep' => ['empty_table']
    ],
];
