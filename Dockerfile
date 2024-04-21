FROM php:8.1-apache
RUN apt-get update
WORKDIR /var/www/html
COPY checking.php index.php /var/www/html
EXPOSE 80
