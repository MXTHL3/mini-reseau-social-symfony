<?php

namespace ContainerVKTaywh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainInterfaceControllerunlikeActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.0p2rMqe.App\Controller\MainInterfaceController::unlikeAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0p2rMqe.App\\Controller\\MainInterfaceController::unlikeAction()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'likesRepository' => ['privates', 'App\\Repository\\LikesRepository', 'getLikesRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'likesRepository' => 'App\\Repository\\LikesRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\MainInterfaceController::unlikeAction()', $container);
    }
}
