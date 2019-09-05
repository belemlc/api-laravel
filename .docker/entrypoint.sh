#!/bin/bash

composer install
# npm install
php artisan key:generate
php artisan migrate
php artisan jwt:secret
php artisan db:seed
php-fpm
