<?php

namespace Container5C9vEbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IeyI6teService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ieyI6te' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ieyI6te'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalle' => ['privates', '.errored..service_locator.ieyI6te.App\\Entity\\Detalle', NULL, 'Cannot autowire service ".service_locator.ieyI6te": it references class "App\\Entity\\Detalle" but no such service exists.'],
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
        ], [
            'detalle' => 'App\\Entity\\Detalle',
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
        ]);
    }
}
