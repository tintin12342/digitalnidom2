# Use the official PHP image as a base
FROM php:8.0-fpm

# Install Nginx
RUN apt-get update && apt-get install -y nginx

# Copy application files to the Nginx directory
COPY . /app

# Copy Nginx configuration
COPY nginx.conf /etc/nginx/sites-available/default

# Expose port 80
EXPOSE 80

# Start PHP-FPM and Nginx
CMD service php8.0-fpm start && nginx -g 'daemon off;'
