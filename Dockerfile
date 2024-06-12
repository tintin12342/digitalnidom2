# Use the official PHP-FPM image for PHP 8
FROM php:8.0-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html
