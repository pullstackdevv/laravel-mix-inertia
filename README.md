# 📚 VPS Deployment Documentation Website

**Built with Laravel + Inertia + Vue 3 + Tailwind CSS**

A modern, clean documentation website for VPS deployment setup using Ubuntu 22.04 LTS with aaPanel, Laravel, React, Docker services, and more.

## 🎯 Overview

This project provides a comprehensive, interactive documentation site for:
- **Ubuntu 22.04 LTS** with aaPanel control panel
- **Laravel + React (Inertia.js)** applications
- **Docker services** (Grafana, Jenkins, n8n)
- **Nginx** web server with SSL
- **MariaDB** database

## ✨ Features

- ✅ **Interactive Documentation** - Click-to-copy command boxes
- ✅ **Clean UI** - Modern design with Tailwind CSS
- ✅ **Responsive** - Works on desktop, tablet, and mobile
- ✅ **Sidebar Navigation** - Easy access to all sections
- ✅ **Service Links** - Direct access to deployed services
- ✅ **System Requirements** - Clear specification of all requirements
- ✅ **Step-by-Step Guides** - 7 comprehensive deployment steps

## 📖 Pages

### Home Page (`/`)
- Landing page with overview
- Feature highlights
- Services overview
- Call-to-action buttons

### Documentation Page (`/docs`)
- **Overview** - Project description
- **System Requirements** - All required software
- **Step 1** - System Preparation
- **Step 2** - aaPanel Setup
- **Step 3** - Laravel + React Deployment
- **Step 4** - Sales Management App Deployment
- **Step 5** - Docker Services (Grafana, n8n, Jenkins)
- **Step 6** - DNS Records Configuration
- **Step 7** - Finalization
- **Access Summary** - Service URLs and descriptions

## 🚀 Installation

```bash
# Install dependencies
composer install
npm install

# Generate app key
php artisan key:generate

# Build assets
npm run dev

# Start development server
php artisan serve
```

## 📦 Tech Stack

- **Backend**: Laravel 10
- **Frontend**: Vue 3 + Inertia.js
- **Styling**: Tailwind CSS
- **Build Tool**: Laravel Mix
- **Database**: MariaDB (configured)
- **Web Server**: Nginx

## 🎨 Customization

### Update Service URLs
Edit `/resources/js/Pages/Documentation.vue` and modify the service URLs:

```javascript
<ServiceLink 
  title="Your Service" 
  url="https://your-domain.com" 
  desc="Description" 
  icon="🚀" 
/>
```

### Modify Commands
Update command boxes in the documentation:

```vue
<CommandBox cmd="your-command-here" />
```

### Change Colors
Tailwind CSS classes are used throughout. Modify color schemes in sections:

```vue
<div class="border-l-4 border-blue-500">...</div>
```

## 📝 Documentation Structure

Each section includes:
- **Icon** - Visual identifier
- **Title** - Section name
- **Content** - Detailed information
- **Commands** - Copy-to-clipboard commands
- **Code blocks** - Configuration examples

## 🔗 Routes

```php
GET  /      → Home page
GET  /docs  → Documentation page
```

## 💡 Features

### Copy-to-Clipboard
Click any command box to copy it to clipboard:
```vue
<CommandBox cmd="apt update && apt upgrade -y" />
```

### Responsive Sidebar
Sticky navigation sidebar that follows scroll:
```vue
<aside class="sticky top-24">...</aside>
```

### Service Cards
Clickable cards linking to deployed services:
```vue
<ServiceLink 
  title="Grafana" 
  url="https://grafana.pullstack.cloud" 
  desc="Monitoring Dashboard" 
  icon="📈" 
/>
```

## 🏗️ Deployment

### Production Build
```bash
npm run production
```

### Nginx Configuration
```nginx
server {
    listen 80;
    listen 443 ssl http2;
    server_name your-domain.com;
    root /www/wwwroot/your-app/public;
    index index.php index.html;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include enable-php-83.conf;
    }
}
```

## 📋 Sections Overview

| Section | Purpose | Content |
|---------|---------|----------|
| Overview | Introduction | Project description |
| Requirements | Prerequisites | System specs |
| Step 1 | System Setup | Ubuntu packages & Docker |
| Step 2 | Panel Setup | aaPanel installation |
| Step 3 | Laravel Deploy | Main app deployment |
| Step 4 | Sales App | Secondary app deployment |
| Step 5 | Docker | Container services |
| Step 6 | DNS | Domain configuration |
| Step 7 | Finalization | Service restart |
| Access | Summary | Service URLs |

## 🔒 Security

- All commands use proper permissions
- SSL/HTTPS configuration included
- Firewall port specifications
- Database security best practices

## 📱 Responsive Design

- **Desktop**: Full 3-column layout (sidebar + content + spacing)
- **Tablet**: 2-column layout with collapsible sidebar
- **Mobile**: Single column with sticky header

## 🎓 Learning Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Inertia.js Guide](https://inertiajs.com)
- [Vue 3 Documentation](https://vuejs.org)
- [Tailwind CSS](https://tailwindcss.com)
- [aaPanel Documentation](https://www.aapanel.com)

## 📄 License

MIT License - Feel free to use and modify

## 🤝 Contributing

Contributions are welcome! Please feel free to submit pull requests.

## 📞 Support

For issues or questions, please open an issue in the repository.

---

**Last Updated**: November 2025  
**Version**: 1.0.0  
**Status**: ✅ Complete and Ready for Use
