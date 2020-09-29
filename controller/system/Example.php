<?php
namespace addons\demo\controller\system;

use addons\demo\Main;
use think\facade\Hook;

class Example extends Main
{
    protected $ESA_TYPE     = "ADMIN";
    protected $EXPOSURE     = ["info"];
    
    public function info()
    {
        // exit(dump(esa_info()));
        $this->assign("other",esa_cache());
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
    
    public function list()
    {
        $page = $this->request->param("page");
        $limit = $this->request->param("limit");
        $m = 0;
        $list = [];
        for($i = ($page-1)*$limit ; $i < $page*$limit ; $i++){
            if($i>($page-1)*$limit + 100) break;
            $list[$m] = [
                "id"    => $i,
                "logo"  => "logo".$i,
                "type"  => "类型$i",
                "name"  => "名称$i",
                "nickname"  => "姓名$i"
            ];
            $m++;
        }
        $data = [
            "total" => 100,
            "last_page" => 100/$limit,
            "data"  => $list,
        ];
        return json($data);
    }
}