FROM php:8.3-fpm

RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl git zip unzip

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . /app

RUN composer install

EXPOSE 8080

CMD ./start.sh
