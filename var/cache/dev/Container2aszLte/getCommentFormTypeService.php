<?php

namespace Container2aszLte;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\CommentFormType' shared autowired service.
     *
     * @return \App\Form\CommentFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/CommentFormType.php';

        return $container->privates['App\\Form\\CommentFormType'] = new \App\Form\CommentFormType();
    }
}
