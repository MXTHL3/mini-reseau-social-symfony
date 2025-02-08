<?php

namespace ContainerVKTaywh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChatter_Messenger_ChatHandlerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'chatter.messenger.chat_handler' shared service.
     *
     * @return \Symfony\Component\Notifier\Messenger\MessageHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'notifier'.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'MessageHandler.php';

        $a = ($container->privates['chatter.transports'] ?? $container->load('getChatter_TransportsService'));

        if (isset($container->privates['chatter.messenger.chat_handler'])) {
            return $container->privates['chatter.messenger.chat_handler'];
        }

        return $container->privates['chatter.messenger.chat_handler'] = new \Symfony\Component\Notifier\Messenger\MessageHandler($a);
    }
}
