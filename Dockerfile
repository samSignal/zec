FROM php:8.2-apache

# Install system dependencies and PostgreSQL client libraries
RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    libpq5

# Install PHP extensions for PostgreSQL
RUN docker-php-ext-install pdo pdo_pgsql pgsql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Copy application files
COPY . /var/www/html/

# Verify extensions (optional debug step)
RUN php -m | grep pgsql && php -m | grep pdo_pgsql

EXPOSE 80
