## セットアップ

ダウンロード等、必要なもの

Composer: Laravel などのPHPコードの取得に必要

https://getcomposer.org/doc/00-intro.md

virtualbox : 仮想環境の構築に必要

https://www.virtualbox.org/

vagrant : 仮想環境の構築に必要

https://www.vagrantup.com/downloads.html

MySQL WorkBench : データベースの中身を確認するのに利用

https://dev.mysql.com/downloads/workbench/

## Laravelセットアップ

```
$ git clone https://github.com/takashi0602/uehonmachiya.git
$ cd uehonmachiya
$ composer require laravel/homestead --dev

Mac
$ php vendor/bin/homestead make

Windows
$ vendor\\\bin\\\homestead make

$ vagrant up
$ vagrant ssh
```
