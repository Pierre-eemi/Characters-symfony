<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPUPGpaT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPUPGpaT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerPUPGpaT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerPUPGpaT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerPUPGpaT\App_KernelDevDebugContainer([
    'container.build_hash' => 'PUPGpaT',
    'container.build_id' => 'a3f5afe0',
    'container.build_time' => 1596914916,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPUPGpaT');