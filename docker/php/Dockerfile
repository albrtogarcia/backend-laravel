FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libicu-dev \
    mariadb-client \
    iputils-ping \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd intl zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
