<?php
namespace addons\demo\controller\system;

use addons\demo\Main;

class Example extends Main
{
    protected $ESA_TYPE     = "ADMIN";
    protected $EXPOSURE     = ["info"];
    
    public function info()
    {
        $this->assign("esa_admin",$this->ESA_ADMIN);
        $this->assign("esa_platform",$this->ESA_PLATFORM);
        $this->assign("esa_setting",$this->ESA_SETTING);
        $this->assign("esa_addon",$this->ESA_ADDON);
        $this->assign("esa_config",$this->ESA_CONFIG);
        return $this->fetch();
    }
    
    public function tag()
    {
        return $this->fetch();
    }
    
    public function table()
    {
        return $this->fetch();
    }

    public function alert()
    {
        return $this->fetch();
    }
}