FROM php:7.4.3-apache
WORKDIR /var/www/html

RUN mkdir /var/www/html/storage

RUN chown -R www-data:www-data /var/www