FROM php:8.3-rc-fpm-alpine

WORKDIR /var/www

RUN apk update && apk add --no-cache \
    git \
    curl \
    libpng-dev \
    libxml2-dev \
    oniguruma-dev \
    zip \
    unzip \
    bash \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www

RUN addgroup -S nginx && adduser -S nginx -G nginx

RUN chown -R nginx:nginx /var/www

USER nginx

EXPOSE 9000
CMD ["php-fpm"]
