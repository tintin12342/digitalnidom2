# Use an official Nginx image
FROM nginx:latest

# Copy the custom Nginx configuration file
COPY default.conf /etc/nginx/conf.d/

# Copy the PHP application files
COPY . /var/www/html

# Use an official PHP-FPM image for PHP processing
FROM php:7.4-fpm

# Copy the PHP application files to the PHP container
COPY . /var/www/html
