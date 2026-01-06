# Hostinger Deployment Checklist for mettacity.com.ph

## Step 1: Upload Files to Hostinger
1. Connect via SFTP (or use File Manager in cPanel)
2. Upload all files to `public_html/`
3. **Ensure these folders are uploaded:**
   - `app/`
   - `bootstrap/`
   - `config/`
   - `database/`
   - `public/`
   - `resources/`
   - `routes/`
   - `storage/`
   - `vendor/` (IMPORTANT - this is large!)
   - `.env` file (with production credentials)
   - `artisan`
   - `composer.json`
   - `composer.lock`

## Step 2: Hostinger cPanel Configuration
1. **Set Document Root:**
   - Go to cPanel → Domains
   - Find your domain: `mettacity.com.ph`
   - Set "Document Root" to: `/home/yourusername/public_html/public`

2. **Check PHP Version:**
   - cPanel → Select PHP Version
   - Must be PHP 8.1 or higher (Laravel requirement)
   - Recommended: PHP 8.2 or 8.3

3. **Create/Update MySQL Database** (if not already created):
   - cPanel → MySQL Databases
   - Database Name: `u553953718_mettacity_db`
   - User: `u553953718_mettacity`
   - Get the password from Hostinger
   - Update the `.env` file with these credentials

## Step 3: Set File Permissions (via SSH or File Manager)
```bash
# Connect via SSH and run these:
chmod 755 ~/public_html/
chmod 755 ~/public_html/public/
chmod 755 ~/public_html/storage/
chmod 755 ~/public_html/bootstrap/
chmod 755 ~/public_html/bootstrap/cache/
chmod 644 ~/public_html/.env
chmod 644 ~/public_html/.htaccess
```

## Step 4: Create/Edit .env on Hostinger
Replace the content with the production environment variables from `.env.hostinger`:
- `APP_ENV=production`
- `APP_DEBUG=false`
- `DB_HOST=localhost`
- `DB_DATABASE=u553953718_mettacity_db` (verify this is correct)
- `DB_USERNAME=your_username` (from Hostinger)
- `DB_PASSWORD=your_password` (from Hostinger)
- `SESSION_DRIVER=file` (not database for shared hosting)
- `CACHE_STORE=file` (not database for shared hosting)
- `QUEUE_CONNECTION=sync` (not database for shared hosting)

## Step 5: Run Migration on Hostinger (via SSH)
```bash
cd ~/public_html
php artisan migrate --force
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

## Step 6: Verify Installation
1. Visit `https://mettacity.com.ph/`
2. Check for proper loading
3. If 500 error:
   - Check Hostinger Error Logs: cPanel → Error Logs
   - Check Laravel logs: `~/public_html/storage/logs/laravel.log`
   - Enable temporary debug: Set `APP_DEBUG=true` in `.env`

## Step 7: Final Production Setup
Once verified working:
1. Set `APP_DEBUG=false` in `.env`
2. Ensure cron job for queue (if needed):
   - Add to Hostinger cPanel → Cron Jobs:
   ```bash
   /usr/bin/php ~/public_html/artisan schedule:run >> /dev/null 2>&1
   ```

## Common Issues & Solutions

### Issue: 500 Error
**Solutions:**
1. Check error logs in cPanel → Error Logs
2. Check Laravel logs: `storage/logs/laravel.log`
3. Enable `APP_DEBUG=true` temporarily to see error
4. Verify document root is set to `/public_html/public`
5. Check file permissions (must be 755 for folders, 644 for files)

### Issue: Database Connection Error
**Solutions:**
1. Verify MySQL database exists in cPanel
2. Verify DB credentials in `.env` are correct
3. Run: `php artisan migrate --force`
4. Check if database user has proper privileges

### Issue: Blank Page or No CSS/JS
**Solutions:**
1. Clear cache: `php artisan view:clear`
2. Clear config: `php artisan config:clear`
3. Rebuild: `php artisan optimize`

### Issue: CSRF Token Mismatch
**Solutions:**
1. Run: `php artisan config:clear`
2. Run: `php artisan cache:clear`
3. Check SESSION_DRIVER is set to `file`

## Support
If you encounter issues:
1. Check `.env` configuration
2. Review error logs
3. Verify all files are uploaded (especially `vendor/`)
4. Ensure database exists and credentials are correct
5. Verify PHP version is 8.1+
