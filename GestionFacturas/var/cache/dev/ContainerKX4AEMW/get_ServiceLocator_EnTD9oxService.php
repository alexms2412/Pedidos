<?php

namespace ContainerKX4AEMW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EnTD9oxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EnTD9ox' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EnTD9ox'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pedido' => ['privates', '.errored..service_locator.EnTD9ox.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.EnTD9ox": it references class "App\\Entity\\Pedido" but no such service exists.'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'pedido' => 'App\\Entity\\Pedido',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
