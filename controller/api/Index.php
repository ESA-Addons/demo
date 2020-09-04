<?php
namespace addons\demo\controller\api;

use addons\demo\Main;

class Index extends Main
{
    protected $ESA_TYPE     = "INDEX";
    protected $EXPOSURE     = ["index"];
    
    public function index()
    {
        return $this->result("123",[],0);
    }
}