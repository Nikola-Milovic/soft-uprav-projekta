FROM php:7.4-apache

RUN apt-get update && apt-get install -y --no-install-recommends

RUN docker-php-ext-install pdo_mysql

WORKDIR /app

ENTRYPOINT ["php", "-S", "0.0.0.0:80"]
