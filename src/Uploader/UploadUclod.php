<?php namespace Lewisliang82\UEditor\Uploader;

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