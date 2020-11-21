<?php

use BeyondCode\LaravelWebSockets\Dashboard\Http\Middleware\Authorize;

return [

    
    'apps' => [
        [
            'id' => env('PUSHER_APP_ID'),
            'name' => env('APP_NAME'),
            'key' => env('PUSHER_APP_KEY'),
            'secret' => env('PUSHER_APP_SECRET'),
            'enable_client_messages' => true,
            'enable_statistics' => true,
        ],
    ],

    
    'app_provider' => BeyondCode\LaravelWebSockets\Apps\ConfigAppProvider::class,

    
    'allowed_origins' => [
        //
    ],

   
    'max_request_size_in_kb' => 250,

   
    'path' => 'admin/websocket',

    
    'middleware' => [
        'web',
        Authorize::class,
    ],

    'statistics' => [
        
        'model' => \BeyondCode\LaravelWebSockets\Statistics\Models\WebSocketsStatisticsEntry::class,

        'interval_in_seconds' => 60,

       
        'delete_statistics_older_than_days' => 60,

        
        'perform_dns_lookup' => false,
    ],

    
    'ssl' => [
        
        'local_cert' => null,

        'local_pk' => null,

        
        'passphrase' => null,
    ],

    
    'channel_manager' => \BeyondCode\LaravelWebSockets\WebSockets\Channels\ChannelManagers\ArrayChannelManager::class,
];
