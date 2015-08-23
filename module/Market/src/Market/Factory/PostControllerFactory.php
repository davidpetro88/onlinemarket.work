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
        $categories = $serviceLocator->getServiceLocator()->get("categories");
        $postController = new \Market\Controller\PostController();
        $postController->setCategories($categories);
        return $postController;
    }
}

?>