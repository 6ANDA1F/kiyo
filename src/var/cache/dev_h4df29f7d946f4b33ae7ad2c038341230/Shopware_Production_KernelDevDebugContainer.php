<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Q8CgWu\Shopware_Production_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Q8CgWu/Shopware_Production_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6Q8CgWu.legacy');

    return;
}

if (!\class_exists(Shopware_Production_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6Q8CgWu\Shopware_Production_KernelDevDebugContainer::class, Shopware_Production_KernelDevDebugContainer::class, false);
}

return new \Container6Q8CgWu\Shopware_Production_KernelDevDebugContainer([
    'container.build_hash' => '6Q8CgWu',
    'container.build_id' => '91af0126',
    'container.build_time' => 1655887733,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6Q8CgWu');