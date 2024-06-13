# Use an official Nginx runtime as a parent image
FROM nginx:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Copy your custom nginx.conf to the container
COPY nginx.conf /etc/nginx/nginx.conf

# Install PHP and PHP-FPM
RUN apt-get update && \
    apt-get install -y php-fpm php-mysql

# Copy your PHP-FPM configuration
COPY php-fpm.conf /etc/php/7.x/fpm/php-fpm.conf

# Create necessary directories for Nginx
RUN mkdir -p /var/log/nginx && \
    mkdir -p /var/cache/nginx

# Copy your website files to the container
COPY . /var/www/html

# Start PHP-FPM and Nginx
CMD service php7.x-fpm start && nginx -g 'daemon off;'
