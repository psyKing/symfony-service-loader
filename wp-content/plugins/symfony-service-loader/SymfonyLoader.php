<?php

use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

class SymfonyLoader
{
    /**
     * @var \ContainerWbngizd\appProdDebugProjectContainer object
     */
    private $serviceContainer;

    /**
     * Loads symfony core and sets symfony service
     * container object as property
     */
    private function loadServiceContainer()
    {
        require_once WP_SYMFONY_PATH . '/vendor/autoload.php';
        require_once WP_SYMFONY_PATH . '/app/AppKernel.php';

        $kernel = new AppKernel(WP_SYMFONY_ENVIRONMENT, WP_SYMFONY_DEBUG);
        $kernel->boot();

        $this->serviceContainer = $kernel->getContainer();
    }

    /**
     * Returns the service object according to the
     * given service id
     *
     * @param string $serviceId
     * @return object
     * @throws Exception
     */
    public function getService($serviceId)
    {
        if (!$this->serviceContainer) {
            $this->loadServiceContainer();
        }

        try{
            return $this->serviceContainer->get($serviceId);
        }
        catch (ServiceNotFoundException $e){
            echo "Exception caught" . ": ",  $e->getMessage(), "\n";
            exit;
        }
    }
}



