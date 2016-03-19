<?php
	
namespace Alpha\View\Helpers;

use Zend\View\Helper\AbstractHelper;

class BaseUrlScript extends AbstractHelper
{
    private $baseUrl = '';
    
    public function __construct($baseUrl){
        $this->baseUrl = $baseUrl;
    }

    public function __invoke($url = '')
    {
        return $this->baseUrl . $url;
    }
}