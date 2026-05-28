# Stage 1: Frontend build
FROM node:20-alpine AS frontend
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
ARG ASSET_URL
ENV ASSET_URL=$ASSET_URL
RUN npm run build

# Stage 2: PHP dependencies
FROM composer:2 AS backend
WORKDIR /app
COPY composer*.json ./
# Install dependencies without scripts to avoid 'artisan' not found error
RUN composer install --no-dev --no-scripts --optimize-autoloader --no-interaction --no-progress --ignore-platform-reqs

# Stage 3: Final production image
FROM php:8.4-fpm-alpine
ENV APP_ENV=production

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

# Copy application files (excluding what's in .dockerignore)
COPY . .

# Copy vendor from backend stage
COPY --from=backend /app/vendor ./vendor

# Copy built assets from frontend stage
COPY --from=frontend /app/public/build ./public/build

# Copy entrypoint script
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Now that we have all files and PHP extensions, run the Laravel discovery scripts
RUN php artisan package:discover --ansi && \
    php artisan vendor:publish --tag=laravel-assets --ansi --force

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000

# Use the entrypoint script to handle runtime optimizations
ENTRYPOINT ["entrypoint.sh"]
CMD ["php-fpm"]