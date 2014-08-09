<?php

// config array
return [

    'main' => 'PCDotFan\\PcdotfanTheme',

    'autoload' => [
        'PCDotFan\\' => 'src'
    ],


    // positions are sections in your theme where widgets can be published
    'positions' => [
        'navbar'     => 'Navbar',
        // ...
    ],

    // renderers define the markup that is rendered in widget positions
    'renderer' => [
        'blank'     => 'theme://pcdotfan/views/renderer/position.blank.razr',
        'navbar'    => 'theme://pcdotfan/views/renderer/position.navbar.razr'
        // ...
    ],

    'resources' => [
        // your resources here...
    ],

    'settings' => [
        'system'  => 'theme://pcdotfan/views/admin/settings.razr'
    ]

];