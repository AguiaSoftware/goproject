<?php

namespace iGo\Model;

use Alpha\Repositorio\AbstractRepositorio;
use Zend\Db\Sql\Sql;
use Zend\XmlRpc\Value\ArrayValue;

class Model extends AbstractRepositorio {

    protected $serviceManager;

    /**
     *
     * @param SessionManager $serviceManager
     */
    public function __construct($serviceManager) {
        $this->serviceManager = $serviceManager;

        parent::__construct($serviceManager->get('Zend\Db\Adapter\Adapter'), '');
    }
}
