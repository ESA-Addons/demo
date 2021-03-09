<?php
/*
 * @Description: demo 控制器
 * @Version: 1.0
 * @Autor: 猪在天上飞 <root@bug-maker.com>
 * @Date: 2020-10-01 10:11:59
 * @LastEditors: 猪在天上飞 <root@bug-maker.com>
 * @LastEditTime: 2020-10-01 10:16:07
 */
namespace addons\demo\controller\admin;

class Info extends Base
{
    public function index(){
        // exit(dump(esa_info()));
        $this->assign("other",esa_cache());
        $this->assign("esa_admin",$this->ESA_ADMIN);
        $this->assign("esa_platform",$this->ESA_PLATFORM);
        $this->assign("esa_setting",$this->ESA_SETTING);
        $this->assign("esa_addon",$this->ESA_ADDON);
        $this->assign("esa_config",$this->ESA_CONFIG);
        return $this->fetch();
    }
}