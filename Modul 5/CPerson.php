<?php

/*
* Klass som används tillsammans med person.php
*
* @version 1.0
* @author Mats Johannesson  easec.se
*/

class CPerson
{
    var $name;
    function __construct($persons_name) {
        $this->name = $persons_name;
    }
    
    function set_name($new_name) {
        $this->name = $new_name;
    }
   
    function get_name() {
        return $this->name;
    }
}
?>
