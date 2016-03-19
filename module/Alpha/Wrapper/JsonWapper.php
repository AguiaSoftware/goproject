<?php

namespace Alpha\Wrapper;

use Zend\View\Model\JsonModel;

class JsonWapper{
	
	static private function Send($status, $message = '', $data = array()){
		return new JsonModel(array(
			'status' 	=> $status,
			'message' 	=> $message,
			'data'		=> $data
		));
	}
	
	static public function Ok($data){
		return self::Send('ok', null, $data);
	}
	
	static public function Error($message, $data = array()){
		return self::Send('error', $message, $data); 
	}
	
	static public function Message($message){
		return self::Send('message', $message, null);
	}
	
}