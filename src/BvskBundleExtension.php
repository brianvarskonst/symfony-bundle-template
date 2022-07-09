<?php

declare(strict_types=1);

namespace Bvsk\Bundle;

use Exception;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class BvskBundleExtension extends Extension
{
    public function __construct(
        private readonly string $configDir,
        private readonly string $servicesFile
    ) {
    }

    /**
     * @throws Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        (new YamlFileLoader(
            $container,
            new FileLocator(
                $this->configDir
            )
        ))
            ->load($this->servicesFile)
        ;
    }
}
