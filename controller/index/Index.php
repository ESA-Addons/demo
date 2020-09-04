<?php
namespace addons\demo\controller\index;

use addons\demo\Main;
use esa\Server;

class Index extends Main
{
    protected $ESA_TYPE     = "INDEX";
    protected $EXPOSURE     = ["info"];
    
    public function index()
    {
        $this->assign("res",Server::test());
        return $this->fetch();
    }
}