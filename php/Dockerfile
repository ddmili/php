FROM php:8.0-fpm

RUN apt-get update && apt-get install -y git

RUN git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis
RUN docker-php-ext-install mysqli redis

COPY settings/php.dev.ini /usr/local/etc/php/conf.d/php.ini
#COPY settings/www.dev.conf /usr/local/etc/php-fpm.d/www.conf
