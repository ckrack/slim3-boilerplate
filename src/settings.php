<?php

// load .env
if (file_exists(__DIR__.'/.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
}

return [
    'settings' => [
        'displayErrorDetails' => getenv('DISPLAY_ERRORS'), // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => getenv('LOG_FILE'),
        ],

        // Plates settings
        'view' => [
            // Path to view directory (default: null)
            'directory' => __DIR__."/templates",
            // Path to asset directory (default: null)
            'assetPath' => __DIR__.'/../public',
            // Template extension (default: 'php')
            'fileExtension' => null,
            // Template extension (default: false) see: http://platesphp.com/extensions/asset/
            'timestampInFilename' => false,
        ],
    ],
];
