# Use an official PHP runtime as a parent image
FROM php:7.4-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

# Install dependencies
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the application code into the container
COPY . /var/www/html/

# Install application dependencies
RUN composer install

# Make sure files/folders needed by the app are writable
RUN chown -R www-data:www-data /var/www/html/storage

# Copy nginx configuration file
COPY nginx.conf /etc/nginx/sites-available/default

# Expose port 80
EXPOSE 80

# Start nginx and PHP-FPM server
CMD service nginx start && php-fpm
