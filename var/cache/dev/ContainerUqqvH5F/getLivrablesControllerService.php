<?php

namespace ContainerUqqvH5F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLivrablesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LivrablesController' shared autowired service.
     *
     * @return \App\Controller\LivrablesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LivrablesController.php';

        $container->services['App\\Controller\\LivrablesController'] = $instance = new \App\Controller\LivrablesController(($container->privates['App\\Repository\\LivrablePartielleRepository'] ?? $container->load('getLivrablePartielleRepositoryService')), ($container->privates['App\\Repository\\LivrablesRepository'] ?? $container->load('getLivrablesRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\LivrablesController', $container));

        return $instance;
    }
}
