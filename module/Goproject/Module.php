<?php

namespace Goproject;

use Zend\Mvc\RouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;

class Module{
	
	public function onBoostrap(MvcEvent $e){
		$eventManager   = $e->getApplication()->getEventManager();
		$moduleListener = new ModuleRouteListener();
		
		$moduleListener->attach($eventManager);
	}
	
	public function getConfig(){
		return include __DIR__ . '/config/module.config.php';
	}
	
	public function getAutoloaderConfig(){
		return array(
			'Zend\Loader\StandardAutoloader' => array(
				'namespaces' => array(
					__NAMESPACE__ => __DIR__
				)
			)
		);
	}
	
}

