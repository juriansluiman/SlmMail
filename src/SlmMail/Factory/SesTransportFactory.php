<?php

namespace SlmMail\Factory;

use SlmMail\Mail\Transport\HttpTransport;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class SesTransportFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new HttpTransport($serviceLocator->get('SlmMail\Service\SesService'));
    }
}
