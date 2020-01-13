# Laravel GraphQL Sample

This is sample project implements GraphQL on Laravel with Lighthouse.

## How to use

1. `$ git clone https://github.com/2bo/laravel-graphql-sample.git`
1. `$ cd laravel-graphql-sample/`
1. `$ cp src/.env.example src/.env`
1. `$ docker-compose up -d`
1. `$ docker-compose exec app ash -l`
1. `# composer install`
1. `# php artisan db:migrate`
1. `# php artisan db:seed `
1. open `http://localhost:10080/graphql-playground` with browser

## GraphQL related file

Schema
* src/graphql/schema.graphql

Directive
* src/schema-directives.graphql

## References

* [GraphQL](https://graphql.org/)
* [Lighthouse](https://lighthouse-php.com/)
* [GraphQL入門 - 使いたくなるGraphQL](https://qiita.com/bananaumai/items/3eb77a67102f53e8a1ad)
* [「GraphQL」徹底入門 ─ RESTとの比較、API・フロント双方の実装から学ぶ](https://employment.en-japan.com/engineerhub/entry/2018/12/26/103000)
* [LaravelにLighthouseを導入してGraphQLサーバーを作る](https://tech.fusic.co.jp/posts/2019-12-08-laravel-lighthouse-graphql-server/)
* [[Laravel] Fakerで日本語を扱う](https://www.84kure.com/blog/2019/02/21/laravel-faker%E3%81%A7%E6%97%A5%E6%9C%AC%E8%AA%9E%E3%82%92%E6%89%B1%E3%81%86/)
* [Laravel Lighthouse GraphQL - Sorting on server side](https://stackoverflow.com/questions/57028362/laravel-lighthouse-graphql-sorting-on-server-side)