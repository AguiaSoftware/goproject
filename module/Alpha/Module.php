<?php

namespace Alpha;

use Zend\Mvc\RouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Mvc\ModuleRouteListener;

use Alpha\View\Helpers\ScriptTag;
use Alpha\View\Helpers\StyleTag;
use Alpha\View\Helpers\BaseUrlScript;

class Module{
	
	public function onBootstrap(MvcEvent $e){
		$eventManager   = $e->getApplication()->getEventManager();
		$moduleListener = new ModuleRouteListener();
		
		$moduleListener->attach($eventManager);		
	}
	
	public function getViewHelperConfig()
    {		
        return array(
            'factories' => array(
                
                'addScript' => function($sm) {
					$config = $sm->getServiceLocator()->get('Config');
					$baseUrl = '';
					
					if(isset($config['static_files']) && isset($config['static_files']['base_url'])){
						$baseUrl = $sm->getServiceLocator()->get('Config')['static_files']['base_url'];
					}
					
 					$st = new ScriptTag($baseUrl); 			
 
                    return $st;
                },
                
                'addStyle' => function($sm) {
                    $config = $sm->getServiceLocator()->get('Config');
					$baseUrl = '';
					
					if(isset($config['static_files']) && isset($config['static_files']['base_url'])){
						$baseUrl = $sm->getServiceLocator()->get('Config')['static_files']['base_url'];
					}
					
 					$st = new StyleTag($baseUrl); 			
 
                    return $st;
                },
				
				'getUrlStaticFiles' => function($sm){
					$config = $sm->getServiceLocator()->get('Config');
					$baseUrl = '';
					
					if(isset($config['static_files']) && isset($config['static_files']['base_url'])){
						$baseUrl = $sm->getServiceLocator()->get('Config')['static_files']['base_url'];
					}
					
 					$st = new BaseUrlScript($baseUrl); 			
 
                    return $st;
				}
            ),
        );
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