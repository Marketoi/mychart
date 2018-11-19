FROM debian:stretch

RUN apt-get update
RUN apt-get install -y nginx php7.0-fpm php7.0-pgsql php7.0-curl

RUN echo "daemon off;" >> /etc/nginx/nginx.conf
RUN rm /etc/nginx/sites-enabled/*
ADD ci /etc/nginx/sites-enabled/ci
ADD start.sh /opt/
COPY ./src/ /var/www/marketoi/

EXPOSE 8083

CMD ["bash", "/opt/start.sh"]

