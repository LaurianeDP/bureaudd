<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKuFlvHw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKuFlvHw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKuFlvHw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKuFlvHw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKuFlvHw\App_KernelDevDebugContainer([
    'container.build_hash' => 'KuFlvHw',
    'container.build_id' => '03a4c221',
    'container.build_time' => 1669881454,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKuFlvHw');
