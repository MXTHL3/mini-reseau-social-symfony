<?php

namespace ContainerLF4LdTr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L_C9cDrService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l.c9cDr' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l.c9cDr'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'failed' => ['privates', 'messenger.transport.failed', 'getMessenger_Transport_FailedService', true],
        ], [
            'failed' => '?',
        ]);
    }
}
