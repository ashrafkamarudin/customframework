<?php

/**
* 
*/
abstract class BaseModel
{
    protected $database;
    
    function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=test", "username", "password");
    }
}