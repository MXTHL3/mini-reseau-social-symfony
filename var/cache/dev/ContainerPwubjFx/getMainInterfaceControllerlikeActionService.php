<?php

namespace ContainerPwubjFx;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainInterfaceControllerlikeActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..b4PlKJ.App\Controller\MainInterfaceController::likeAction()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..b4PlKJ.App\\Controller\\MainInterfaceController::likeAction()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
            'usersRepository' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'postsRepository' => 'App\\Repository\\PostsRepository',
            'usersRepository' => 'App\\Repository\\UsersRepository',
            'entityManager' => '?',
        ]))->withContext('App\\Controller\\MainInterfaceController::likeAction()', $container);
    }
}
