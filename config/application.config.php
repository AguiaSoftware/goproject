<?php

return array(
	
	/**
	 * Modulos do sistema
	 */
	'modules' => array(
		'Alpha',
		'Goproject'		
	),
		
	/**
	 * Configuração dos modulos
	 */
	'module_listener_options' => array(
			
		/**
		 * Pasta de localização dos modulos
		 */
		'module_paths' => array(
			'./module'
		),
		
		/**
		 * Configuração dos arquivos de carregamento automaticos
		 */
		'config_glob_paths' => array(
				'config/autoload/{,*.}{global,local}.php',
		),
		
	),
	
);