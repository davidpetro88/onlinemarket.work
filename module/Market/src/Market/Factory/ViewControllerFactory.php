<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class ViewControllerFactory implements FactoryInterface
{
    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $allService = $serviceLocator->getServiceLocator();
        $sm = $allService->get("ServiceManager");
        $viewController = new \Market\Controller\ViewController();
        $viewController->setListingsTable($sm->get("listings-table"));
        return $viewController;
    }
}