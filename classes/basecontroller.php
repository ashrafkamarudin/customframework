<?php

/**
* 
*/
abstract class BaseController
{
    protected $urlvalues;
    protected $action;
    protected $model;
    protected $view;
    
    public function __construct($action, $urlvalues)
    {
        $this->action = $action;
        $this->urlvalues = $urlvalues;

        //establish the view object
        $this->view = new view(get_class($this), $action);
    }

    //executes the requested method
    public function ExecuteAction()
    {
        return $this->{$this->action}();
    }
}