FROM php:8.1-apache

RUN a2enmod rewrite

COPY . /var/www/html/

RUN docker-php-ext-install mysqli pdo pdo_mysql