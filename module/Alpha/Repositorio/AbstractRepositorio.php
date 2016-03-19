<?php

namespace Alpha\Repositorio;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Sql\TableIdentifier;
use Zend\Db\Sql\Sql;

class AbstractRepositorio extends AbstractTableGateway{

	protected $adapter;
	protected $table;
	protected $tableName;
	protected $schema;

	/**
	*
	* @param ServiceManager $sm
	* @param string $table
	* @param string schema
	* @param string $modelName
	*/
	public function __construct($adapter, $table, $model = null, $schema = null)
	{
		if($schema != null){
			$this->table = new TableIdentifier($table, $schema);
		}else{
			$this->table = new TableIdentifier($table);
		}
		
		$this->tableName = $table;		
		$this->adapter = $adapter;
		
		$this->adapter = $adapter;
		$this->schema = $schema;
		
		if($model != null){
			$this->resultSetPrototype = new ResultSet();
        	$this->resultSetPrototype->setArrayObjectPrototype($model);
		}else{
			$this->resultSetPrototype = new ResultSet();
		}
	}
	
	public function fetchAll(){
		return $this->select();
	}
	
	public function find($where){
		return $this->select($where);
	}
	
	public function findOne($id){
		return $this->select(array(
			'id' => $id
		))->current();
	}
	
	/**
	 * Retorna o id do ultimo registro inserido
	 */
	protected function getLastInsertId(){
		$sql = new Sql( $this->adapter );
	
		$select = $sql->select( $this->table );
		$select->order('Id DESC');
		$select->limit(1);
	
		return $this->selectWith($select)->current()->Id;
	}
	
}