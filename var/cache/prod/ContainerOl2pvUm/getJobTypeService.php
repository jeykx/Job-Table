<?php

namespace ContainerOl2pvUm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJobTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\JobType' shared autowired service.
     *
     * @return \App\Form\JobType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\JobType'] = new \App\Form\JobType();
    }
}
