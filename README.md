# 日志查看器

> 支持ThinkPHP6
> 要求 `php >= 7.4`

## 使用方法

```shell
composer require weeks/logviewer
```

## 预览图

![](demo.png)

```php
public function test()
{
    return (new \logviewer\thinkphp\LogViewer())->fetch();
}
```

> 可自定义配置
>
> 在 `config` 下新建 `logviewer.php` 文件

```php
<?php
return [
    // 日志标题
    'title' => '日志查看器',
    // 默认显示日志应用模块
    'default_module' => 'admin',
    // 常用的日志应用模块
    'modules'        => [
        'admin',
        'merchant',
        'kefu',
        'api'
    ],
    // layui css 路径
    'layui_css_path' => '//unpkg.com/layui/dist/css/layui.css',
    // layui js 路径
    'layui_js_path'  => '//unpkg.com/layui/dist/layui.js',
];

```
