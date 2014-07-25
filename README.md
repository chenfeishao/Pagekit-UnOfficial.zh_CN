# Pagekit

一个构建在 Symfony 基础上的模块化、轻量级CMS。

* 主页: [http://www.pagekit.com/](http://www.pagekit.com/) - 了解更多关于 Pagekit 的信息
* Twitter: [@pagekit](https://twitter.com/pagekit) - 获取最新信息
* IssueTracker: - [Issues](http://github.com/pagekit/pagekit/issues) - 在此反馈BUG
* 开发者交流: #pagekit on irc.freenode.net

非官方中文文档以及Pagekit 中文版本由[Pagekit.me](http://www.pagekit.me/)提供，感谢三位：@PCDotFan @Deamwork Tech. @Panni_007

## 快速入门

下载 [最新发布版本](http://www.pagekit.com/download) 并解压后将内容复制到需使用的网站服务器目录下。
下一件事，我们需要用类似于 phpMyAdmin 的工具创建一个为 Pagekit 专门使用的空数据库。如果你的主机仅允许创建一个数据库，并且此数据库已有其他程序在正常使用，你同样可以设置与其不同的表前缀(Pagekit prefixes)以避免冲突。


## 开发者

首先，安装 [Composer](https://getcomposer.org/doc/00-intro.md#installation-nix).

如果你还没有这样做，请Clone the Pagekit git repo.
```
git clone git://github.com/pagekit/pagekit.git
```

若需要安装项目依赖库，请专项被克隆的目录并执行composer `install`命令。
```
composer install
#or if you don't have composer installed globally:
php path/to/composer.phar install
```

To update Pagekit, you need to pull the Pagekit git repo and run the composer `update` command

```
git pull
composer update
```

你同样需要清空 `app/cache` 目录内所有内容。

### CLI

Pagekit 提供一组命令用于执行日常任务。你可以输入 `./pagekit --help` 查看目前可用的所有命令。
```
./pagekit --help
```

在此可以找到关于命令行工具的进一步信息 [Pagekit 中文文档](http://www.pagekit.me/docs/quickstart)


## Copyright and license

Copyright [YOOtheme](http://www.yootheme.com) GmbH under the [MIT license](LICENSE).
