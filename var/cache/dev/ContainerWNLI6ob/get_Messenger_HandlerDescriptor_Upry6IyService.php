<?php

namespace ContainerWNLI6ob;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_Upry6IyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.Upry6Iy' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'messenger'.\DIRECTORY_SEPARATOR.'Handler'.\DIRECTORY_SEPARATOR.'HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mercure'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'UpdateHandler.php';

        return $container->privates['.messenger.handler_descriptor.Upry6Iy'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\Mercure\Messenger\UpdateHandler(($container->privates['mercure.hub.default.traceable'] ?? self::getMercure_Hub_Default_TraceableService($container))), []);
    }
}
