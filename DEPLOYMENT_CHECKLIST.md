# TheBox Deployment Checklist

## Pre-Deployment Steps

### Environment Configuration
- [ ] Set `APP_ENV=production` in .env
- [ ] Set `APP_DEBUG=false` in .env
- [ ] Update `APP_URL` to your domain
- [ ] Configure production database credentials
- [ ] Set up mail configuration for notifications

### Security
- [ ] Generate new APP_KEY for production
- [ ] Configure HTTPS/SSL certificate
- [ ] Set secure session settings
- [ ] Configure CORS if needed

### Database
- [ ] Run migrations on production: `php artisan migrate`
- [ ] Seed with production data: `php artisan db:seed`
- [ ] Backup strategy in place

### Assets & Performance
- [ ] Build production assets: `npm run build`
- [ ] Configure caching: `php artisan config:cache`
- [ ] Route caching: `php artisan route:cache`
- [ ] View caching: `php artisan view:cache`

### Testing
- [ ] Test all application features
- [ ] Test user registration/login
- [ ] Test concept creation/editing
- [ ] Test commenting system
- [ ] Test search functionality
- [ ] Test responsive design on mobile

## Deployment Options

### Option 1: Railway (Recommended for beginners)
1. Push code to GitHub
2. Connect Railway to your repository
3. Configure environment variables
4. Deploy automatically

### Option 2: DigitalOcean App Platform
1. Create DO account
2. Connect GitHub repository
3. Configure build settings
4. Set environment variables
5. Deploy

### Option 3: Traditional Hosting
1. Upload files via FTP
2. Create database
3. Update .env file
4. Run migrations
5. Configure domain

## Post-Deployment
- [ ] Test all functionality on live site
- [ ] Set up monitoring
- [ ] Configure backup schedule
- [ ] Set up analytics (Google Analytics)
- [ ] Submit to search engines
