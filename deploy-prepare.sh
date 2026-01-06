#!/bin/bash

# Prepare Laravel for Production Deployment
# Run this locally before uploading to Hostinger

echo "🔧 Preparing Laravel for production..."

# Clear all caches
echo "Clearing caches..."
php artisan cache:clear
php artisan config:clear
php artisan view:clear

# Optimize the application
echo "Optimizing application..."
php artisan optimize
php artisan config:cache
php artisan route:cache

# Create necessary directories
echo "Creating necessary directories..."
mkdir -p storage/logs
mkdir -p storage/framework/cache
mkdir -p storage/framework/sessions
mkdir -p storage/framework/views
mkdir -p bootstrap/cache

# Set permissions
echo "Setting permissions..."
chmod -R 755 storage/
chmod -R 755 bootstrap/cache/
chmod 644 .env
chmod 644 public/.htaccess

echo "✅ Application is ready for deployment!"
echo ""
echo "Next steps:"
echo "1. Upload all files to Hostinger (public_html/)"
echo "2. Set document root to: public_html/public"
echo "3. Update .env with production database credentials"
echo "4. Run: php artisan migrate --force"
echo "5. Run: php artisan optimize"
