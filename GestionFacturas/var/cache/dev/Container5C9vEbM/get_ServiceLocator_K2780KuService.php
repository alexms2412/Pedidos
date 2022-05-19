<?php

namespace Container5C9vEbM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K2780KuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K2780Ku' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K2780Ku'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'empresa' => ['privates', '.errored..service_locator.K2780Ku.Symfony\\Component\\Security\\Core\\User\\UserInterface', NULL, 'Cannot autowire service ".service_locator.K2780Ku": it references interface "Symfony\\Component\\Security\\Core\\User\\UserInterface" but no such service exists. Did you create a class that implements this interface?'],
            'pedidoRepository' => ['privates', 'App\\Repository\\PedidoRepository', 'getPedidoRepositoryService', true],
        ], [
            'empresa' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
            'pedidoRepository' => 'App\\Repository\\PedidoRepository',
        ]);
    }
}
