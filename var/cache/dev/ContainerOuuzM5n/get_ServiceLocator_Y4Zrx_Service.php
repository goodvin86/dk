<?php

namespace ContainerOuuzM5n;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y4Zrx_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y4_Zrx.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y4_Zrx.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'loader' => ['privates', '.errored..service_locator.y4_Zrx..Symfony\\Component\\Config\\Loader\\LoaderInterface', NULL, 'Cannot autowire service ".service_locator.y4_Zrx.": it needs an instance of "Symfony\\Component\\Config\\Loader\\LoaderInterface" but this type has been excluded from autowiring.'],
        ], [
            'loader' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
        ]);
    }
}