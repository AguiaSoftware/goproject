<?php

namespace Alpha\Model;

class AbstractModel{

	public function __get($attribute)
	{
		return $this->$attribute;
	}

	public function __set($attribute, $value)
	{
		$this->$attribute = $value;
	}

	public function toArray()
	{
		return get_object_vars($this);
	}

	public function getArrayCopy()
	{
		return get_object_vars($this);
	}

	public function exchangeArray(array $data)
	{

	}

}