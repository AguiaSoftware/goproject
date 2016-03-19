<?php

namespace iGo\Model;

use Alpha\Repositorio\AbstractRepositorio;
use Zend\Db\Sql\Sql;
use Zend\XmlRpc\Value\ArrayValue;

use iGo\Model\Cidade;

class CidadeRepositorio extends AbstractRepositorio{
	
	protected $serviceManager;
	
	/**
	 * 
	 * @param SessionManager $serviceManager
	 */
	public function __construct($serviceManager){
		$this->serviceManager = $serviceManager;
		
		parent::__construct($serviceManager->get('Zend\Db\Adapter\Adapter'), 'cidades', new Cidade());
	}

	public function insert($cidade){
		$this->insert(array(
		    'nome' => $cidade->nome,
		    'coordinates' => $cidade->coordinates
		));
	}
	
	public function fetchAll(){
		return $this->select()->toArray();
	}
	
	/**
	 * 
	 * @param string $nome
	 * @return iGo\Model\Cidade
	 */
	public function find($nome){
		$sql = new Sql( $this->adapter );
		
		$select = $sql->select( $this->table );
		$select->where->like('nome', "%$nome%");

		return $this->selectWith($select)->toArray();
	}
}