FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git unzip libpq-dev libpng-dev \
    && docker-php-ext-install pdo pdo_mysql gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

COPY laravel /var/www
WORKDIR /var/www
RUN composer install --no-dev --optimize-autoloader

COPY package.json package-lock.json ./

RUN npm install

RUN npm run build