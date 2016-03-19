<?php

/**
 * Configuração Modulo Alpha
 */
return array(
	'view_manager' => array(
		'display_not_found_reason' => true,
		'display_exceptions'       => true,
		'doctype'                  => 'HTML5',
		'not_found_template'       => 'error/404',
		'exception_template'       => 'error/index',
		'template_map' => array(
			'layout/layout'           => __DIR__ . '/../View/layout/layout.phtml',
			'error/404'               => __DIR__ . '/../View/error/404.phtml',
			'error/index'             => __DIR__ . '/../View/error/index.phtml',
		),
		'template_path_stack' => array(
			__DIR__ . '/../View',
		),
	),
);