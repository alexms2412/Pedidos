<?php

namespace ContainerKfaTC7z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FU4aPQqService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.fU4aPQq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fU4aPQq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'producto' => ['privates', '.errored..service_locator.fU4aPQq.App\\Entity\\Producto', NULL, 'Cannot autowire service ".service_locator.fU4aPQq": it references class "App\\Entity\\Producto" but no such service exists.'],
            'productoRepository' => ['privates', 'App\\Repository\\ProductoRepository', 'getProductoRepositoryService', true],
        ], [
            'producto' => 'App\\Entity\\Producto',
            'productoRepository' => 'App\\Repository\\ProductoRepository',
        ]);
    }
}