FROM php:8.2-apache

# Enable Apache mod_rewrite if needed
RUN a2enmod rewrite

# Copy your app files into the web directory
COPY . /var/www/html/

EXPOSE 80
