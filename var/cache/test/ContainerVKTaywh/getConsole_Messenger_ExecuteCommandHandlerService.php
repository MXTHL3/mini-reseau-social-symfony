<?php

namespace ContainerVKTaywh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Messenger_ExecuteCommandHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'console.messenger.execute_command_handler' shared service.
     *
     * @return \Symfony\Component\Console\Messenger\RunCommandMessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'RunCommandMessageHandler.php';

        return $container->privates['console.messenger.execute_command_handler'] = new \Symfony\Component\Console\Messenger\RunCommandMessageHandler((isset($container->factories['service_container']['console.messenger.application']) ? $container->factories['service_container']['console.messenger.application']($container) : $container->load('getConsole_Messenger_ApplicationService')));
    }
}
