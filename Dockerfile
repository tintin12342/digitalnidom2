# Use an official Nginx runtime as a parent image
FROM nginx:latest

# Set the working directory inside the container
WORKDIR /etc/nginx

# Copy nginx.conf from the current directory to /etc/nginx/nginx.conf in the container
COPY nginx.conf nginx.conf

# Expose port 80 to the Docker network
EXPOSE 80

# Start Nginx when the container launches
CMD ["nginx", "-g", "daemon off;"]
