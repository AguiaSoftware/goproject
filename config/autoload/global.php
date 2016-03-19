<?php

/**
 * Configuração Global
 */

return array(
	
	/**
	 * Configuração de acesso ao banco de dados
	 */
	/*dsn'    => 'pgsql:dbname=igo;host=geoinovaapp.com.br;port=5552*/
	
	'db' => array(
		'driver' => 'Pdo',
		'dsn'    => 'mysql:dbname=geoinova;host=mysql.geoinova.com.br',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        )
	),
		
	/**
	 * Configuração da classe de conexão com o banco
	 */
	'service_manager' => array(
		'factories' => array(
			'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory'
		)
	)
			
);