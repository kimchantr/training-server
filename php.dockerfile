FROM php:7.2-fpm

# RUN cd /var/www
# COPY ./src /var/www/docker-demo

RUN docker-php-ext-install mysqli