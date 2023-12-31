<?php

namespace Container22Z3xxp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUnloadUserToExcelCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\UnloadUserToExcelCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.App\\Command\\UnloadUserToExcelCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:usertoexcel', [], 'Команда по выгрузке пользователей в excel', false, #[\Closure(name: 'App\\Command\\UnloadUserToExcelCommand')] fn (): \App\Command\UnloadUserToExcelCommand => ($container->privates['App\\Command\\UnloadUserToExcelCommand'] ?? $container->load('getUnloadUserToExcelCommandService')));
    }
}
