FROM nginx:1.21.3

RUN mkdir -p /var/www/docker-demo

COPY ./src /var/www/docker-demo

ADD virtual-host.conf /etc/nginx/conf.d/default.conf

EXPOSE 80