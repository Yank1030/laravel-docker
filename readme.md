```
$ docker-compose build
$ docker-compose up -d

$ dox
$ select php

$ laravel new

$ npm run development -- --watch
```

コントローラ作成
```
php artisan make:controller TestController
php artisan make:controller SlickController
```
ルート確認
```
php artisan route:list
```
モデル作成
```
php artisan make:model Test
```
マイグレーション作成
```
php artisan make:migration create_tests_table --create=tests
```
マイグレーション実行
```
php artisan migrate
```
Seederの作成
```
php artisan make:seeder TestTableSeeder
```
Seederの実行
```
php artisan db:seed
```
