<?php

class SymfonyLoader
{
    public $serviceContainer;

    /**
     * Loads symfony core and sets symfony service
     * container object as property
     */
    private function loadServiceContainer()
    {
        require_once sprintf('%s/vendor/autoload.php', WP_SYMFONY_PATH);
        require_once sprintf('%s/app/AppKernel.php', WP_SYMFONY_PATH);

        $kernel = new AppKernel(WP_SYMFONY_ENVIRONMENT, WP_SYMFONY_DEBUG);
        $kernel->loadClassCache();
        $kernel->boot();

        $this->serviceContainer = $kernel->getContainer();
    }

    /**
     * Returns the service object according to the
     * given service id
     *
     * @param string $serviceId
     * @return object
     */
    public function getService($serviceId)
    {
        if (!$this->serviceContainer) {
            $this->loadServiceContainer();
        }

        return $this->serviceContainer->get($serviceId);
    }
}



