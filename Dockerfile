FROM php:8.2-apache

# Install build dependencies and PostgreSQL driver
RUN apt-get update \
  && apt-get install -y libpq-dev \
  && docker-php-ext-install pdo pdo_pgsql pgsql \
  && rm -rf /var/lib/apt/lists/*

# Optionally enable mod_rewrite and set doc root
RUN a2enmod rewrite

# Copy application files
COPY . /var/www/html/

EXPOSE 80
