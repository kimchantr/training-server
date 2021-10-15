FROM php:8.0-fpm

RUN cd /var/www

COPY ./src /var/www/docker-demo