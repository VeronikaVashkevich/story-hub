FROM php:8.4-fpm

RUN apt-get -y update && apt-get upgrade -y
RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

RUN pecl install xdebug-3.4.0 && docker-php-ext-enable xdebug

COPY .docker/php/conf.d/* $PHP_INI_DIR/conf.d/

CMD ["php-fpm"]
