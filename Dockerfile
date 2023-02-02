FROM php:8.2-fpm

RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . /app

RUN composer install

EXPOSE 8080

CMD php artisan serve --host=0.0.0.0 --port=8080