# 🚀 VPS Deployment Setup — aaPanel + Docker + Laravel + React + Jenkins + Grafana + n8n

## 🧠 Overview

Dokumentasi ini menjelaskan langkah-langkah setup server **VPS Ubuntu 22.04** menggunakan **aaPanel**  
untuk men-deploy aplikasi berbasis Laravel + React (Inertia), dan beberapa service berbasis Docker:  
**Jenkins**, **Grafana**, dan **n8n** — lengkap dengan SSL, domain, dan reverse proxy Nginx.

---

## ⚙️ System Requirements

- **OS:** Ubuntu 22.04 LTS  
- **Panel:** aaPanel (Free Control Panel)  
- **Web Server:** Nginx  
- **Database:** MariaDB  
- **PHP:** 8.3  
- **Node.js:** LTS version  
- **Docker & Docker Compose:** latest stable

---

## 🧩 Step 1. System Preparation

```bash
# Update system
apt update && apt upgrade -y

# Install basic packages
apt install -y git curl wget unzip zip htop vim net-tools

# Install Node.js (LTS)
curl -fsSL https://deb.nodesource.com/setup_lts.x | bash -
apt install -y nodejs

# Install Docker and Docker Compose
apt install -y docker.io docker-compose
systemctl enable docker
systemctl start docker

🧰 Step 2. Setup aaPanel

Login ke aaPanel melalui browser

http://IP-SERVER:7800


Install software berikut dari App Store:

Nginx

PHP 8.3

MariaDB

phpMyAdmin

PureFTPd

Pastikan port berikut dibuka di firewall:

80, 443, 22, 3306, 19066, 19067

🧱 Step 3. Deploy Laravel + React (Inertia)

📍 Lokasi project: /www/wwwroot/laravel-inertia

cd /www/wwwroot/laravel-inertia
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
chown -R www:www storage bootstrap/cache
chmod -R 775 storage bootstrap/cache

Nginx Config (pullstack.cloud)
server {
    listen 80;
    listen 443 ssl http2;
    server_name pullstack.cloud;
    root /www/wwwroot/laravel-inertia/public;
    index index.php index.html;

    ssl_certificate     /www/server/panel/vhost/cert/pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/pullstack.cloud/privkey.pem;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include enable-php-83.conf;
        fastcgi_param PHP_ADMIN_VALUE "open_basedir=/www/wwwroot/laravel-inertia/:/tmp/";
    }

    access_log /www/wwwlogs/pullstack.cloud.access.log;
    error_log /www/wwwlogs/pullstack.cloud.error.log;
}

🧱 Step 4. Deploy Sales Management App (Inertia React)

📍 Lokasi project: /www/wwwroot/sales-management-app

cd /www/wwwroot/sales-management-app
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan migrate --seed

Nginx Config (app.pullstack.cloud)
server {
    listen 80;
    listen 443 ssl http2;
    server_name app.pullstack.cloud;

    root /www/wwwroot/sales-management-app/public;
    index index.php index.html;

    ssl_certificate     /www/server/panel/vhost/cert/app.pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/app.pullstack.cloud/privkey.pem;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include enable-php-83.conf;
        fastcgi_param PHP_ADMIN_VALUE "open_basedir=/www/wwwroot/sales-management-app/:/tmp/";
    }

    access_log /www/wwwlogs/app.pullstack.cloud.access.log;
    error_log  /www/wwwlogs/app.pullstack.cloud.error.log;
}

🐳 Step 5. Dockerized Services Setup
🟦 Grafana
docker run -d --name grafana \
  -p 3000:3000 \
  -v grafana-storage:/var/lib/grafana \
  grafana/grafana:latest

docker update --restart always grafana


Nginx Config (grafana.pullstack.cloud)

server {
    listen 80;
    listen 443 ssl http2;
    server_name grafana.pullstack.cloud;

    ssl_certificate     /www/server/panel/vhost/cert/grafana.pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/grafana.pullstack.cloud/privkey.pem;

    location / {
        proxy_pass http://127.0.0.1:3000;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto https;
    }
}

🟧 n8n Automation
docker run -itd --name n8n \
  -p 5678:5678 \
  -v ~/.n8n:/home/node/.n8n \
  -e WEBHOOK_URL=https://n8n.pullstack.cloud \
  n8nio/n8n

docker update --restart always n8n


Nginx Config (n8n.pullstack.cloud)

server {
    listen 80;
    listen 443 ssl http2;
    server_name n8n.pullstack.cloud;

    ssl_certificate     /www/server/panel/vhost/cert/n8n.pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/n8n.pullstack.cloud/privkey.pem;

    location / {
        proxy_pass http://127.0.0.1:5678;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto https;
    }
}

🟩 Jenkins CI/CD
docker run -d --name jenkins \
  -p 8080:8080 -p 50000:50000 \
  -v jenkins_home:/var/jenkins_home \
  jenkins/jenkins:lts

docker update --restart always jenkins


Nginx Config (jenkins.pullstack.cloud)

server {
    listen 80;
    listen 443 ssl http2;
    server_name jenkins.pullstack.cloud;

    ssl_certificate     /www/server/panel/vhost/cert/jenkins.pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/jenkins.pullstack.cloud/privkey.pem;

    location / {
        proxy_pass http://127.0.0.1:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto https;
    }

    location ~ ^/ws/(.*) {
        proxy_pass http://127.0.0.1:8080;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection "upgrade";
        proxy_set_header Host $host;
    }
}

🌐 Step 6. DNS Records (Cloudflare)
Type	Name	Value
A	pullstack.cloud	31.97.188.192
A	app.pullstack.cloud	31.97.188.192
A	grafana.pullstack.cloud	31.97.188.192
A	jenkins.pullstack.cloud	31.97.188.192
A	n8n.pullstack.cloud	31.97.188.192
✅ Step 7. Finalization
nginx -t
service nginx reload
php artisan optimize:clear
service php-fpm restart

🧠 AI Agent Prompt Role (Optional)
#role
You are a DevOps Automation Agent specialized in setting up web infrastructures using aaPanel on VPS servers. 
You must perform tasks sequentially: system prep, aaPanel installation, Docker service deployment, domain SSL setup, and Nginx proxy configuration. 
Follow security best practices (HTTPS, open_basedir, restart policies). 
Always confirm success with tests like `nginx -t` and `docker ps`.

#goal
Deploy Laravel, React, Jenkins, Grafana, and n8n apps under subdomains using Docker + Nginx + SSL.

#instruction
Follow the provided step-by-step commands to configure the VPS server (Ubuntu 22.04) and attach SSL via aaPanel. 
Use root paths under /www/wwwroot/, assign proper permissions, and enable all services to autostart.

🧭 Access Summary
Service	URL	Description
Laravel (Main Site)	https://pullstack.cloud
	Landing Page
Sales Management App	https://app.pullstack.cloud
	Inertia + React App
Grafana Dashboard	https://grafana.pullstack.cloud
	Monitoring Dashboard
Jenkins CI/CD	https://jenkins.pullstack.cloud
	CI/CD Pipeline
n8n Automation	https://n8n.pullstack.cloud
	Workflow Automation

---

Kamu mau versi markdown ini saya ubah jadi **AI-Agent readable JSON schema (format untuk
