# Use the official PHP 7.4 image
FROM php

WORKDIR /app

# Copy your application code into the container
COPY . .

# Expose port 3000 for web server
EXPOSE 3000

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:3000"]
