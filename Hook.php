<?php
namespace addons\demo;

use ESA\AddonsHook;

class Hook extends AddonsHook
{
    /**
     * 附件上传配置
     * @return array
     */
    public function esaAttachmentInit($config)
    {
        return $config;
    }
    
    /**
     * 附件上传完毕
     * @return bool
     */
    public function esaAttachmentDone()
    {
        return true;
    }
    
    /**
     * 附件删除
     * @return bool
     */
    public function esaAttachmentDelete()
    {
        return true;
    }
    
    /**
     * 附件弹窗配置
     * @return bool
     */
    public function esaPopInit($config)
    {
        return $config;
    }
    
    

}