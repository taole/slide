<?php namespace App\Lib\Template;
    
use App\Lib\Template\TemplateAbstract;

class Manager extends TemplateAbstract {
  
    function getSales()
    { 
    	$result = $this->getSalesInMonth();

    	return $result*2/100;
    }

    function getSalesInMonth()
    {
    	// dang hard code
    	// lay ra doang so ban hang trong thang cua tat ca nhan vien ban hang minh phu trach
    	return 20000 ;
    }

}
