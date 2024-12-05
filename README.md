## アプリケーション名

確認テスト：お問合せフォーム

## ER 図

![ER図](ER.drawio.png)

## URL

```

・開発環境：http://localhost/
・phpMyAdmin:http://localhost:8080/

```

## 使用技術(実行環境)

```

PHP 7.4.9
Laravel Framework 8.83.8
MySQL 8.0.26
Nginx
Docker/Docker-compose

```

## 環境構築

```

リポジトリからダウンロードして下さい
git clone git@github.com:ayaka0601/ayaka_test.git

srcディレクトリに.envファイルを作成し
docker-compose.ymlのDBの設定を記入して下さい
$ cp .env.example .env
---
DB_HOST=mysql
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
---

Docker環境構築
$ docker-compose up -d --build
$ docker-compose exec php bash
> composer install
> php artisan key:generate
> php artisan migrate
> php artisan db:seed
http://localhostにアクセスして
"The stream or file could not be opened"というエラーが発生した場合は
ファイルの権限を変更して対応お願いします

Laravel環境構築
1.docker-compose exec php bash
2.composer install
3..env.exampleファイルから.envを作成し、環境変数を変更
4.php artisan key:generate
5.php artisan migrate
6.php artisan db:seed

```
