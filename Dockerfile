FROM php:8.2-apache

# Install PostgreSQL driver for PHP
RUN apt-get update \
  && apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql

# Enable Apache mod_rewrite (if needed)
RUN a2enmod rewrite

# Copy your app files into the web directory
COPY . /var/www/html/

EXPOSE 80
