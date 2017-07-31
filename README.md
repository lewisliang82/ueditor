### 参考列表

- [Ender/laravel-ueditor](https://github.com/argb/laravel-ueditor)

代码几乎全部用上面的项目，主要更加公司上传需要用到Ucloud，来改写的


## Install

``` bash
$ composer require "lewisliang82/ueditor:dev-master"
```


## Usage

首先在laravel 配置文件app.php中增加对应的provider和alias

```php
'Lewisliang82\UEditor\UEditorServiceProvider'
```

```php
'UEditor'   => 'Lewisliang82\UEditor\UEditor'
```

然后在你的项目根目录执行

``` 
php artisan vendor:publish --provider='lewisliang82\UEditor\UEditorServiceProvider'
```

UEditor所需要的资源文件、配置文件会分别发布到对应目录，之后你可以根据需要修改这些文件，当然也可以使用默认配置

你也可以选择通过tag参数指明只发布特定内容，如

```
php artisan vendor:publish --provider='Lewisliang82\UEditor\UEditorServiceProvider' --tag=config
```

为了方便，共分为config js css dialog third_party lang theme 七个tag，除了third_party最好是全部发布，除非你真的很想用自己的替换掉默认的

如果有了较大的改动需要强制覆盖已有的内容可以加上--force 参数

```php
php artisan vendor:publish --provider='Lewisliang82\UEditor\UEditorServiceProvider' --force
```

所有的资源文件会发布到/public/ueditor 目录下,由于文件量比较大，如果不希望加入git，可以在.gitignore里面加一行 /public/ueditor

php部分增加了lang的配置，会发布到默认的lang目录下，目前包括en zh_Cn zh_TW

基本配置文件包括一个php的配置文件ueditor.php,会发布到laravel的默认config目录中
前端的config.js会跟其他前端资源文件一样发布到/public/ueditor目录下

前端部分的使用可以参考UEditor[官方文档](http://fex.baidu.com/ueditor/)，这里不再赘述

为了方便，定义了几个辅助方法

- 输出对应的css

```php
{!! UEditor::css() !!} 输出UEditor的css
```

- 初始化编辑器容器

```php
{!! UEditor::content() !!}
```

- 输出对应的js

```php
{!! UEditor::js() !!}
```

### 实例化编辑器js代码

```js
<script type="text/javascript">
    
    var ue = UE.getEditor('ueditor'); //用辅助方法生成的话默认id是ueditor
    
    /* 自定义路由 */
    /*
    var serverUrl=UE.getOrigin()+'/ueditor/test'; //你的自定义上传路由
    var ue = UE.getEditor('ueditor',{'serverUrl':serverUrl}); //如果不使用默认路由，就需要在初始化就设定这个值
    */
    
    ue.ready(function() {
        ue.execCommand('serverparam', '_token', '{{ csrf_token() }}');
    });
</script>
```
