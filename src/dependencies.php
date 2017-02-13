<?php
// DIC configuration
$container = $app->getContainer();

// Slim router
$container->add('Slim\Router', function () use ($container) {
    return $container->get('router');
});

// monolog
$container->add('Psr\Log\LoggerInterface', function () use ($container) {
    $settings = $container->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());

    if (getenv('APP_ENV') == "development") {
        $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], Monolog\Logger::DEBUG));
    } else {
        $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], (integer)getenv('LOG_LEVEL')));
    }
    return $logger;
});

// Leauge\Plates via Bridge
$container->add('Projek\Slim\Plates', function () use ($container) {
    $settings = $container->get('settings')['view'];
    $view = new \Projek\Slim\Plates($settings);

    // Set \Psr\Http\Message\ResponseInterface object
    $view->setResponse($container->get('response'));

    // Instantiate and add Slim specific extension
    $view->loadExtension(new Projek\Slim\PlatesExtension(
        $container->get('router'),
        $container->get('request')->getUri()
    ));

    return $view;
});
