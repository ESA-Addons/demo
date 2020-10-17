<?php
/*
 * @Description: demo 控制器
 * @Version: 1.0
 * @Autor: 猪在天上飞 <root@bug-maker.com>
 * @Date: 2020-10-01 10:11:59
 * @LastEditors: 猪在天上飞 <root@bug-maker.com>
 * @LastEditTime: 2020-10-01 10:16:07
 */
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

    public function alert()
    {
        return $this->fetch();
    }
    
    /**
     * @description: 表格页面
     * @return page 
     * @author: 猪在天上飞 <root@bug-maker.com>
     */
    public function table()
    {
        return $this->fetch();
    }

    /**
     * @description: 表格表单
     * @author: 猪在天上飞 <root@bug-maker.com>
     */
    public function form()
    {
        if($this->request->isajax()){
            $this->result("保存成功",$this->request->param());
        }
        $data = [
            "tpl_date"  => "2020-10-01 12:00",
            "tpl_icon"  => "fa fa-ban",
            "tpl_image" => "20200918/8fe6b6846a88736dccb06663d0a1626a.jpg",
        ];
        $this->assign("info",$data);
        $this->assign("type",$this->request->param("type"));
        return $this->fetch();
    }

    /**
     * @description: 表格数据
     * @return json
     * @author: 猪在天上飞 <root@bug-maker.com>
     */
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