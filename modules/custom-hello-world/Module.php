<?php declare(strict_types=1);

namespace MyApp\Modules\CustomHelloWorld;

use Phalcon\DiInterface;
use Phalcon\Loader;
use Phlexus\Module as PhlexusModule;

class Module extends PhlexusModule
{
    /**
     * @return string
     */
    public function getHandlersNamespace() : string
    {
        return __NAMESPACE__ . '\Controllers';
    }

    /**
     * Registers an autoloader related to the module
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function registerAutoloaders(DiInterface $dependencyInjector = null)
    {
        $namespaces = [
            $this->getHandlersNamespace() => __DIR__ . '/controllers/',
        ];

        $loader = new Loader();
        $loader->registerNamespaces($namespaces);
        $loader->register();
    }

    /**
     * Registers services related to the module
     *
     * @param \Phalcon\DiInterface $dependencyInjector
     */
    public function registerServices(DiInterface $dependencyInjector)
    {
        //
    }
}
