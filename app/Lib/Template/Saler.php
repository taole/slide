<?php namespace App\Lib\Template;
    
use App\Lib\Template\TemplateAbstract;

class Saler extends TemplateAbstract {
  
    function getSales()
    { 
    	$result = $this->getSalesInMonth();

    	return $result*10/100;
    }

    function getSalesInMonth()
    {
    	// dang hard code
    	// lay ra doang so ban hang trong thang cua nhan vien ban hang
    	return 2000 ;
    }

}
