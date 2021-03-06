<?php

namespace ContainerKfaTC7z;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpresaControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\EmpresaController' shared autowired service.
     *
     * @return \App\Controller\EmpresaController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\EmpresaController'] = $instance = new \App\Controller\EmpresaController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\EmpresaController', $container));

        return $instance;
    }
}
