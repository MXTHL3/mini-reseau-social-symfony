<?php

namespace ContainerLF4LdTr;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionControlleronKernelControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cTVgQ4H.App\Controller\SessionController::onKernelController()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cTVgQ4H.App\\Controller\\SessionController::onKernelController()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'event' => ['privates', '.errored..service_locator.cTVgQ4H.Symfony\\Component\\HttpKernel\\Event\\ControllerEvent', NULL, 'Cannot autowire service ".service_locator.cTVgQ4H": it references class "Symfony\\Component\\HttpKernel\\Event\\ControllerEvent" but no such service exists.'],
        ], [
            'event' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
        ]))->withContext('App\\Controller\\SessionController::onKernelController()', $container);
    }
}
