<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerN9xxOmv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerN9xxOmv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerN9xxOmv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerN9xxOmv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerN9xxOmv\App_KernelDevDebugContainer([
    'container.build_hash' => 'N9xxOmv',
    'container.build_id' => '4718a57c',
    'container.build_time' => 1653657462,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerN9xxOmv');
