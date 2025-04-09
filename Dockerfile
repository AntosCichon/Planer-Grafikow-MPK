FROM php:8.1-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy your app to the container
COPY . /var/www/html/

# Optional: Install MySQL extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

