<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{
    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $allService = $serviceLocator->getServiceLocator();
        $sm = $allService->get("ServiceManager");
        $indexController = new \Market\Controller\IndexController();
        $indexController->setListingsTable($sm->get("listings-table"));
        return $indexController;
    }
}