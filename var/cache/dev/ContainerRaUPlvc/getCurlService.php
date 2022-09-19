<?php

namespace ContainerRaUPlvc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCurlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Curl' shared autowired service.
     *
     * @return \App\Controller\Curl
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Curl.php';

        $container->services['App\\Controller\\Curl'] = $instance = new \App\Controller\Curl(($container->privates['.debug.http_client'] ?? $container->get_Debug_HttpClientService()));

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Curl', $container));

        return $instance;
    }
}
