<?php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Projek\Slim\Plates;

class Hello
{
    protected $view;
    protected $logger;

    /**
     * Use League\Container for auto-wiring dependencies into the controller
     * @param Plates          $view   [description]
     * @param LoggerInterface $logger [description]
     */
    public function __construct(
        Plates $view,
        LoggerInterface $logger
    ) {
        $this->view = $view;
        $this->logger = $logger;
    }

    /**
     * Basic example to print the Slim-Skeleton template.
     * @param  [type] $request  [description]
     * @param  [type] $response [description]
     * @param  [type] $args     [description]
     * @return [type]           [description]
     */
    public function world($request, $response, $args)
    {
        if (empty($args)) {
            $this->logger->debug('Hello::world: No arguments passed');
        }

        // render template
        return $this->view->render('index.php', $args);
    }
}
