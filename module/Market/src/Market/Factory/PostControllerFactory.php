<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class PostControllerFactory implements FactoryInterface
{
    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $allService = $serviceLocator->getServiceLocator();
        $sm = $allService->get("ServiceManager");

        $categories = $sm->get("categories");

        $postController = new \Market\Controller\PostController();
        $postController->setCategories($categories);
        $postController->setPostForm($sm->get("market-post-form"));

        return $postController;
    }
}

?>