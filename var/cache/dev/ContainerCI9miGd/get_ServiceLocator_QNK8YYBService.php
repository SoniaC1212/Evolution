<?php

namespace ContainerCI9miGd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QNK8YYBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.QNK8YYB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.QNK8YYB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'candidat' => ['privates', '.errored..service_locator.QNK8YYB.App\\Entity\\Candidat', NULL, 'Cannot autowire service ".service_locator.QNK8YYB": it references class "App\\Entity\\Candidat" but no such service exists.'],
            'candidatRepository' => ['privates', 'App\\Repository\\CandidatRepository', 'getCandidatRepositoryService', true],
        ], [
            'candidat' => 'App\\Entity\\Candidat',
            'candidatRepository' => 'App\\Repository\\CandidatRepository',
        ]);
    }
}
