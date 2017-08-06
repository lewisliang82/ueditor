<?php
namespace Lewisliang82\UEditor\Ucloud;

global $SDK_VER;
global $UCLOUD_PROXY_SUFFIX;
global $UCLOUD_PUBLIC_KEY;
global $UCLOUD_PRIVATE_KEY;

$SDK_VER = '1.0.8';
$UCLOUD_PROXY_SUFFIX    = config('cnupload.core.ucloud.proxy_suffix');
$UCLOUD_PUBLIC_KEY      = config('cnupload.core.ucloud.public_key');
$UCLOUD_PRIVATE_KEY     = config('cnupload.core.ucloud.private_key');
