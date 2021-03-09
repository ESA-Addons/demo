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

class Form extends Base
{
    public function index(){
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
}