<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVlXkhEn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVlXkhEn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVlXkhEn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVlXkhEn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVlXkhEn\App_KernelDevDebugContainer([
    'container.build_hash' => 'VlXkhEn',
    'container.build_id' => 'c6a06ee4',
    'container.build_time' => 1663964765,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVlXkhEn');
