# Use an official PHP-FPM image for PHP 8
FROM php:8.0-fpm as php-fpm

# Use an official Nginx image
FROM nginx:latest

# Copy the custom Nginx configuration file
COPY default.conf /etc/nginx/conf.d/default.conf

# Copy the PHP application files to the Nginx container
COPY --from=php-fpm /var/www/html /var/www/html
