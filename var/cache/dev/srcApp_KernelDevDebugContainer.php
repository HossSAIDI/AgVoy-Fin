<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBDxa6r8\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBDxa6r8/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBDxa6r8.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBDxa6r8\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBDxa6r8\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BDxa6r8',
    'container.build_id' => '07f1e788',
    'container.build_time' => 1574957388,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBDxa6r8');
