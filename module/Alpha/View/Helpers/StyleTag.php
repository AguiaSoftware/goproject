<?php
	
namespace Alpha\View\Helpers;

use Zend\View\Helper\AbstractHelper;

class StyleTag extends AbstractHelper
{
    private $baseUrl = '';
    
    public function __construct($baseUrl){
        $this->baseUrl = $baseUrl;
    }

    public function __invoke($url)
    {
        $u = $this->baseUrl . $url;
        return '<link rel="stylesheet" href="' . $u . '">';
    }
}