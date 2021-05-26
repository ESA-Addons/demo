<?php
namespace addons\demo\model;

use think\Model;

class Table extends Model {
    // 设置数据表（不含前缀）
    protected $name = 'demo_table';

    // 开启时间自动写入
    protected $autoWriteTimestamp = true;
    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    // 自动完成
    protected $auto       = [];
    protected $insert     = [];
    protected $update     = [];

}