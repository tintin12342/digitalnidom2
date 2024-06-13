# Use an official Nginx runtime as the base image
FROM nginx:latest

# Remove the default Nginx configuration file
RUN rm /etc/nginx/conf.d/default.conf

# Copy your Nginx configuration file
COPY nginx.conf /etc/nginx/conf.d/

# Copy your PHP files to the appropriate directory
COPY . /usr/share/nginx/html

# Expose port 80 to allow incoming connections
EXPOSE 80

# Command to start Nginx when the container starts
CMD ["nginx", "-g", "daemon off;"]
