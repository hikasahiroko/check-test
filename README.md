# お問い合わせフォーム

## 環境構築
### Dockerビルド<br/>
1.git clone git@github.com:hikasahiroko/check-test.git<br/>
2.docker-compose up -d --build<br/>
＊MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集してください。<br/>

### Laravel環境構築<br/>
1.docker-compose exec php bsh<br/>
2.composer install<br/>
3..env.exampleファイルから.envを作成し環境変数を変更<br/>
4.php artisan key:generate<br/>
5.ptp artisan migrate<br/>
6.ptp artisan db:seed<br/>

## 使用技術(実行環境)
- PHP 7.3または8.0
- Laravel 8.0
- MySQL 8.0

## ER図
![alt text](image.png)

## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/