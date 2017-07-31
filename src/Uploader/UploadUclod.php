<?php namespace Ender\UEditor\Uploader;

use Lewisliang82\UEditor\Ucloud\proxy;

/**
 *
 *
 * trait UploadQiniu
 *
 * 七牛 上传 类
 *
 * @package Ender\UEditor\Uploader
 */
trait UploadUclod
{
    /**
     * 获取文件路径
     * @return string
     */
    protected function getFilePath()
    {
        $fullName = $this->fullName;


        $fullName = ltrim($fullName, '/');


        return $fullName;
    }

    public function uploadUcloud($key, $content)
    {
        $proxy = new proxy();
        $buket = config('ueditor.core.uclod.buket');
        $ret = $proxy->UCloud_PutFile($buket, $key, $content);

        if(null == $ret[1]){
            return true;
        }else{
            return false;
        }
    }
}