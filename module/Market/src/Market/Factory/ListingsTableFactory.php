<?php
namespace Market\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Market\Model\ListingsTable;

class ListingsTableFactory implements FactoryInterface
{

    /*
     * (non-PHPdoc)
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(ServiceLocatorInterface $sm)
    {
        return new ListingsTable(ListingsTable::$tableName, $sm->get("general-adapter"));
    }
}