<?php

class model 
{
    private $ary;
    
    function set_data($name,$value)
    {
        $this->ary[$name]=$value;
    }
    
    function get_data($name)
    {
        return $this->ary[$name];
    }
}
