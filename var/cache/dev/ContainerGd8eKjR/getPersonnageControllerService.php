<?php

namespace ContainerGd8eKjR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonnageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PersonnageController' shared autowired service.
     *
     * @return \App\Controller\PersonnageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/PersonnageController.php';

        $container->services['App\\Controller\\PersonnageController'] = $instance = new \App\Controller\PersonnageController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\PersonnageController', $container));

        return $instance;
    }
}
