# Base image - PHP 8.1 Alpine
FROM php:8.3-rc-fpm-alpine

# Set working directory
WORKDIR /var/www

# Install dependencies using apk for Alpine
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

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /var/www

RUN addgroup -S nginx && adduser -S nginx -G nginx

# Set proper permissions
RUN chown -R nginx:nginx /var/www

# Set user
USER nginx

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
