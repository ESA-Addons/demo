<?php
namespace addons\demo;

use ESA\Addons;

class Main extends Addons
{
    /**
     * 插件安装方法
     * @return bool
     */
    public function install()
    {
        return true;
    }

    /**
     * 插件卸载方法
     * @return bool
     */
    public function uninstall()
    {
        return true;
    }
    
    public function model($model){
        $models = [
            "table" => "\addons\demo\model\Table",
        ];
        return model($models[$model]);
    }
}