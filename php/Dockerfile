FROM php:7.0-apache

EXPOSE 80

RUN apt-get update && apt-get install -y \
    git \
    mysql-client \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN git clone https://github.com/evilnapsis/bookmedik

COPY Database.php /var/www/html/bookmedik/core/controller/Database.php

ENTRYPOINT ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
