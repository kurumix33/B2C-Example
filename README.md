# B2C-Example

[![License](https://poser.pugx.org/topthink/think/license)](https://packagist.org/packages/topthink/think)
![PHP Composer](https://github.com/kurumix33/B2C-Example/workflows/PHP%20Composer/badge.svg)

这是一个B2C商城的示例, 采用**Think5.0 Framework**构建.OOP风格.
采用敏捷开发完成.

编码风格良好.

## 目录结构

初始的目录结构如下：

```
 www  WEB部署目录（或者子目录）
 ├─application           应用目录
 │  ├─common             公共模块目录（可以更改）
 │  ├─module_name        模块目录
 │  │  ├─config.php      模块配置文件
 │  │  ├─common.php      模块函数文件
 │  │  ├─controller      控制器目录
 │  │  ├─model           模型目录
 │  │  ├─view            视图目录
 │  │  └─ ...            更多类库目录
 │  │
 │  ├─command.php        命令行工具配置文件
 │  ├─common.php         公共函数文件
 │  ├─config.php         公共配置文件
 │  ├─route.php          路由配置文件
 │  ├─tags.php           应用行为扩展定义文件
 │  └─database.php       数据库配置文件
 │
 ├─public                WEB目录（对外访问目录）
 │  ├─index.php          入口文件
 │  ├─router.php         快速测试文件
 │  └─.htaccess          用于apache的重写
 │
 ├─thinkphp              框架系统目录
 │  ├─lang               语言文件目录
 │  ├─library            框架类库目录
 │  │  ├─think           Think类库包目录
 │  │  └─traits          系统Trait目录
 │  │
 │  ├─tpl                系统模板目录
 │  ├─base.php           基础定义文件
 │  ├─console.php        控制台入口文件
 │  ├─convention.php     框架惯例配置文件
 │  ├─helper.php         助手函数文件
 │  ├─phpunit.xml        phpunit配置文件
 │  └─start.php          框架入口文件
 │
 ├─extend                扩展类库目录
 ├─runtime               应用的运行时目录（可写，可定制）
 ├─vendor                第三方类库目录（Composer依赖库）
 ├─build.php             自动生成定义文件（参考）
 ├─composer.json         composer 定义文件
 ├─LICENSE.txt           授权说明文件
 ├─README.md             README 文件
 ├─think                 命令行入口文件
```

### 编码规范

*   类库、函数文件统一以`.php`为后缀；
*   类的文件名均以命名空间定义，并且命名空间的路径和类库文件所在路径一致；
*   类名和类文件名保持一致，统一采用驼峰法命名（首字母大写）；
