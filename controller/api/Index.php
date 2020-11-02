<?php
namespace addons\demo\controller\api;

use addons\demo\Main;

class Index extends Main
{
    protected $ESA_TYPE     = "API";
    protected $EXPOSURE     = [];
    
    public function index()
    {
        $data = [
            "pid"   => PLATFORM_ID,
            "uid"   => $this->ESA_USER['id']
        ];
        
        return $this->result("",$data,0);
    }
}