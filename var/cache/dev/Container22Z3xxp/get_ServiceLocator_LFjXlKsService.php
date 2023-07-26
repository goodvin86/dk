<?php

namespace Container22Z3xxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LFjXlKsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LFjXlKs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LFjXlKs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'roleRepository' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService', true],
        ], [
            'roleRepository' => 'App\\Repository\\RoleRepository',
        ]);
    }
}
