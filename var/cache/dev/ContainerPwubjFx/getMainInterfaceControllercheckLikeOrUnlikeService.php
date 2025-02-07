<?php

namespace ContainerPwubjFx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainInterfaceControllercheckLikeOrUnlikeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OSIILhK.App\Controller\MainInterfaceController::checkLikeOrUnlike()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OSIILhK.App\\Controller\\MainInterfaceController::checkLikeOrUnlike()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'likesRepository' => ['privates', 'App\\Repository\\LikesRepository', 'getLikesRepositoryService', true],
        ], [
            'likesRepository' => 'App\\Repository\\LikesRepository',
        ]))->withContext('App\\Controller\\MainInterfaceController::checkLikeOrUnlike()', $container);
    }
}
