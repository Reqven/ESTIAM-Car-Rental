<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMxiF5rx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMxiF5rx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMxiF5rx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMxiF5rx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerMxiF5rx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'MxiF5rx',
    'container.build_id' => '9a04804a',
    'container.build_time' => 1578414896,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMxiF5rx');
