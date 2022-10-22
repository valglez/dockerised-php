FROM php:7-fpm

WORKDIR /app

RUN apt update -y && apt upgrade -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY ./code .

CMD ["php-fpm"]