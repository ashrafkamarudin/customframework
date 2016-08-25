<?php

/**
* 
*/
class Home extends BaseController
{
    protected function index()
    {
        $viewmodel = "Just a basic string";
        $this->ReturnView($viewmodel, true);
    }
}