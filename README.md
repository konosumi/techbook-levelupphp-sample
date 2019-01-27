# レベルアップPHP 〜言語を理解して中級者へ〜

「レベルアップPHP 〜言語を理解して中級者へ〜」のサンプルコードレポジトリです。

入門書などを使って構築したPHP環境は、そのままお使いください。コマンドラインのPHP実行で動作します。

## Usage

```sh
php hello-levelup.php
```

## Dockerを利用する場合

筆者がPHP7.3での動作確認を行なうために構築した、単純なDocker環境があります。それを使うことも可能です。

```sh
# dockerは、サンプルリポジトリのdockerディレクトリにあります。
cd ./docker

# docker-composeで起動します。「-d」を付けると、バックグラウンド実行になります。
docker-compose up -d

# dockerの中に入って、PHPを実行する
docker exec -it docker_apache-php-7.3_1 bash
> cd /var/www/sample/
> php hello-levelup.php

# ブラウザアクセスでは、付録AのビルトインウェブサーバーをApacheで動かしたルーティングエンジンが起動します。
# http://localhost:8080/phpinfo
```
