<?php

namespace ContainerGBx0qtL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PSyB56OService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PSyB56O' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PSyB56O'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'detalleRepository' => ['privates', 'App\\Repository\\DetalleRepository', 'getDetalleRepositoryService', true],
            'empresa' => ['privates', '.errored..service_locator.PSyB56O.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.PSyB56O": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
            'pedido' => ['privates', '.errored..service_locator.PSyB56O.App\\Entity\\Pedido', NULL, 'Cannot autowire service ".service_locator.PSyB56O": it references class "App\\Entity\\Pedido" but no such service exists.'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'detalleRepository' => 'App\\Repository\\DetalleRepository',
            'empresa' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
            'pedido' => 'App\\Entity\\Pedido',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
