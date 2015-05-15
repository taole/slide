<?php namespace App\Lib\Template;

    abstract class TemplateAbstract {
        //the template method 
        //  sets up a general algorithm for the whole class 
        public final function getSalary($staff) {
            $hours       = $staff->getHours();
            $coefficient = $staff->getCoefficient();
          
            $sales      = $this->getSales();
            $tax        = $this->getTax();

            $salary     = $hours *$coefficient ;

            return ( $salary + $sales ) * (100 - $tax)/100 ;     
        }
        //the primitive operation
        //  this function must be overridded
        abstract function getSales();
        //the hook operation
        //  this function may be overridden, 
        //  but does nothing if it is not
        function getTax($variable = null) {
            return 10;
        }     

    }
