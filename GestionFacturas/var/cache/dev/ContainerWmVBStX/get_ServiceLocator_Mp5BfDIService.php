<?php

namespace ContainerWmVBStX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mp5BfDIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mp5BfDI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mp5BfDI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalle' => ['privates', '.errored..service_locator.Mp5BfDI.App\\Entity\\Detalle', NULL, 'Cannot autowire service ".service_locator.Mp5BfDI": it references class "App\\Entity\\Detalle" but no such service exists.'],
        ], [
            'detalle' => 'App\\Entity\\Detalle',
        ]);
    }
}