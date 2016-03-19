<?php

	/**
	 * define a pasta-raiz como padrao
	 */
	chdir(dirname(__DIR__));

	/**
	 * Habilita exibir todos os erros na pagina
	 */
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(-1);
	@session_start();

	/**
	 * Inclui o carregador de classes conforme PSR-0
	 */
	require 'init_autoloader.php';

	/**
	 * Inclui o AWS SDK
	 */
	require 'library/aws/aws-autoloader.php';		
	
	/**
	 * Carrega a aplicação
	 * Define rota padrão da aplicação para tcs
	 */
	$application = Zend\Mvc\Application::init(require 'config/application.config.php');
	$application->getRequest()->setBaseUrl('/');
	$application->run();