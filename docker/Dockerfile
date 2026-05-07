# Stage 1: Frontend build
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: PHP dependencies
FROM composer:2 AS backend
WORKDIR /app
COPY composer*.json ./
# We use --ignore-platform-reqs because the composer image might not have all PHP extensions, 
# but the final image will.
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress --ignore-platform-reqs
COPY . .
RUN composer dump-autoload --optimize --no-dev

# Stage 3: Final production image
FROM php:8.4-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
    bash \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    icu-dev \
    postgresql-dev

# PHP Extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        pdo_pgsql \
        pgsql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        intl

WORKDIR /var/www

# Copy application files from backend stage (includes vendor)
COPY --from=backend /app .

# Copy built assets from frontend stage
COPY --from=frontend /app/public/build ./public/build

# Copy entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000

# Use the entrypoint script to handle runtime optimizations
ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]