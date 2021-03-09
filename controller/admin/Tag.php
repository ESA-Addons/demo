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

class Tag extends Base
{
    public function index(){
        return $this->fetch();
    }
}