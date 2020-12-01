## Preparation

### composer.json を利用する場合
composer.jsonを作成し、composer installを実行
`docker run --rm -it -v $PWD:/app composer install`

### 直接requireを叩く場合
require でパッケージを呼び出し
`docker run --rm -it -v $PWD:/app composer composer require fakerphp/faker`

## QuickStart

bashコマンドをしコンテナにアクセス
`docker run --rm -it -v $PWD:/app composer bash`

phpを実行
`php test.php`


### Reference
https://qiita.com/PitPat/items/dc1ad09f7936b8825473
https://github.com/fzaninotto/Faker
https://mebee.info/2020/09/12/post-13274/
https://fossa-hobby.hatenablog.com/entry/2020/11/09/000000