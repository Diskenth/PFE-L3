<?php

return [
    

    'local' => env('SWEET_ALERT_LOCAL', true),


    

    'cdn' => env('SWEET_ALERT_CDN'),

   

    'timer' => env('SWEET_ALERT_TIMER', 5000),

    'width' => env('SWEET_ALERT_WIDTH', '32rem'),

    

    'height_auto' => env('SWEET_ALERT_HEIGHT_AUTO', true),

   
    'padding' => env('SWEET_ALERT_PADDING', '1.25rem'),

   

    'animation' => env('SWEET_ALERT_ANIMATION', true),

    

    'show_confirm_button' => env('SWEET_ALERT_CONFIRM_BUTTON', true),

    
    'show_close_button' => env('SWEET_ALERT_CLOSE_BUTTON', false),

   
    'toast_position' => env('SWEET_ALERT_TOAST_POSITION', 'top-end'),

   

    'middleware' => [

        'toast_position' => env('SWEET_ALERT_MIDDLEWARE_TOAST_POSITION', 'top-end'),

        'toast_close_button' => env('SWEET_ALERT_MIDDLEWARE_TOAST_CLOSE_BUTTON', true),
    ],

];
