<!-- ## Docker  Hub
<p>belemlc/laravel-api</p> -->

# Básica API Rest com Laravel

API Rest usando Laravel com authenticação usando JWT

## Instalaçãao

-  Docker
     1) Baixe a image que se encontra no docker hub
        1) docker pull belemlc/api-laravel
        2) docker-compose up --build
- Usando o Artisan
- Lamp
- Gerar Produtos com <b>Tinker</b>
  - Para docker use docker exec -it app bash
  - php artisan tinker
  - $products = factory('App\Models\Product', 50)->create()

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Usando a API

- Aplicando o Filtro (Não é oo brigatório o uso de todos)
  - filter=brand:[BRAND_NAME]
  - sort=[COLUMN_NAME]:[ASC|DESC]
  - limit=[NUMBER_LIMIT_PER_PAGE]
- exemplo: ?filter=brand:marte&sort=name:desc&limit=10

