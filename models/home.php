<?php

/**
* 
*/
class HomeModel extends BaseModel
{
    //data passed to the home index view
    public function index()
    {   
        $this->viewModel->set("pageTitle","Custom MVC");
        return $this->viewModel;
    }
}