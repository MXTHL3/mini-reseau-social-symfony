<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWNLI6ob\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWNLI6ob/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWNLI6ob.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWNLI6ob\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWNLI6ob\App_KernelDevDebugContainer([
    'container.build_hash' => 'WNLI6ob',
    'container.build_id' => '2b106176',
    'container.build_time' => 1739467192,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWNLI6ob');
