<?php
/*
 * @Description: demo 控制器
 * @Version: 1.0
 * @Autor: 猪在天上飞 <root@bug-maker.com>
 * @Date: 2020-10-01 10:11:59
 * @LastEditors: 猪在天上飞 <root@bug-maker.com>
 * @LastEditTime: 2020-10-01 10:16:07
 */
namespace addons\demo\controller\platform;

use addons\demo\Main;
use think\facade\Hook;

class Setting extends Main
{
    protected $ESA_TYPE     = "ADMIN";
    protected $EXPOSURE     = [];
    
    public function index(){
        // dump($this);
        return $this->fetch();
    }
}