<?php

/**
* 
*/
class ViewModel
{
    
    //dynamically adds a property or method to the ViewModel instance
    public function set($name, $value)
    {
        $this->$name = $value;
    }

    //returns the requested property value
    public function get($name)
    {
        if (isset($this->{$name})) {
            return $this->{$name};
        } else {
            return null;
        }
    }
}