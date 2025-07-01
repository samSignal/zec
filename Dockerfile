FROM php:8.2-apache

# Install PostgreSQL extensions
RUN apt-get update \
  && apt-get install -y libpq-dev unzip \
  && docker-php-ext-install pgsql pdo_pgsql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy app files
COPY . /var/www/html/

EXPOSE 80
