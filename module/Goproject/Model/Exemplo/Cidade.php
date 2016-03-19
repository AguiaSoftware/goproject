<?php

namespace iGo\Model\Cidade;

use Alpha\Model\AbstractModel;

class Cidade extends AbstractModel{

	public function exchangeArray(array $data)
	{
 		$this->id = isset($data['id']) ? $data['id'] : null;
		$this->nome = isset($data['nome']) ? $data['nome'] : null;
		$this->estado = isset($data['estado']) ? $data['estado'] : null;
		$this->sigla = isset($data['sigla']) ? $data['sigla'] : null;
	}	
	
}