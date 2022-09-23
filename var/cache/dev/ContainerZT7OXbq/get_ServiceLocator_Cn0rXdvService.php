<?php

namespace ContainerZT7OXbq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cn0rXdvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Cn0rXdv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Cn0rXdv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'flasher' => ['privates', 'flasher.sweetalert', 'getFlasher_SweetalertService', false],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'doctrine' => '?',
            'flasher' => '?',
            'slugger' => '?',
        ]);
    }
}
