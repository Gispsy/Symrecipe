<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYYRx2g6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYYRx2g6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYYRx2g6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYYRx2g6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYYRx2g6\App_KernelDevDebugContainer([
    'container.build_hash' => 'YYRx2g6',
    'container.build_id' => '0c24b672',
    'container.build_time' => 1669026983,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYYRx2g6');
