<?php
namespace addons\demo\controller\admin;

use addons\demo\Main;

class Base extends Main
{
    protected $ESA_TYPE     = "ADMIN";
    protected $EXPOSURE     = [];
    
    public function __construct()
    {
        parent::__construct();
        $this->checkauth();
    }
}