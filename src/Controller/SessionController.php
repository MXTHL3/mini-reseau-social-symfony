<?php

namespace App\Controller;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;
use Symfony\Component\HttpFoundation\RequestStack;

class SessionController implements EventSubscriberInterface
{
    private $twig;
    private $requestStack;

    public function __construct(Environment $twig, RequestStack $requestStack)
    {
        $this->twig = $twig;
        $this->requestStack = $requestStack;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $session = $this->requestStack->getSession();
        $this->twig->addGlobal('user_session', [
            'user_id' => $session->get('user_id'),
            'user_name' => $session->get('user_name'),
        ]);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}