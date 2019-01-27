FROM php:7.3-apache

# mod_rewriteを有効にします
RUN a2enmod rewrite

# ComposerでのパッケージインストールにGitクライアントを使用します。
RUN apt-get update && apt-get install -y git && apt-get clean
