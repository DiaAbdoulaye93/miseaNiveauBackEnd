<?php

namespace ContainerUqqvH5F;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__BC20InService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..BC20In' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..BC20In'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userService' => ['privates', 'App\\Service\\UserService', 'getUserServiceService', true],
        ], [
            'manager' => '?',
            'userService' => 'App\\Service\\UserService',
        ]);
    }
}
