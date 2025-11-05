<template>
  <div class="min-h-screen bg-gradient-to-br from-slate-50 to-slate-100">
    <!-- Header -->
    <header class="sticky top-0 z-40 border-b border-slate-200 bg-white/80 backdrop-blur-md">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between py-4">
          <Link href="/" class="flex items-center gap-3 hover:opacity-80 transition">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-blue-700">
              <BookOpen :size="20" class="text-white" />
            </div>
            <h1 class="text-2xl font-bold text-slate-900">VPS Deployment Docs</h1>
          </Link>
        </div>
      </div>
    </header>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar Navigation -->
        <aside class="lg:col-span-1">
          <div class="sticky top-24 space-y-2 bg-white rounded-lg p-4 border border-slate-200 shadow-sm">
            <h3 class="text-sm font-semibold text-slate-900 uppercase tracking-wide px-3 py-2">Contents</h3>
            <nav class="space-y-1">
              <a href="#overview" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Overview</a>
              <a href="#requirements" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Requirements</a>
              <a href="#step1" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 1: System</a>
              <a href="#step2" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 2: aaPanel</a>
              <a href="#step3" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 3: Laravel</a>
              <a href="#step4" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 4: Sales App</a>
              <a href="#step5" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 5: Docker</a>
              <a href="#step6" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 6: DNS</a>
              <a href="#step7" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Step 7: Final</a>
              <a href="#access" class="block px-3 py-2 rounded-lg text-sm font-medium text-slate-700 hover:bg-blue-50 transition">Access</a>
            </nav>
          </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:col-span-3 space-y-8">
          <!-- Overview -->
          <section id="overview">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-3xl font-bold text-slate-900 mb-4 flex items-center gap-3">
                <Rocket :size="32" class="text-blue-600" /> VPS Deployment Setup
              </h2>
              <p class="text-lg text-slate-600 leading-relaxed">
                Dokumentasi lengkap untuk setup server <strong>VPS Ubuntu 22.04</strong> menggunakan <strong>aaPanel</strong> dengan deployment aplikasi berbasis <strong>Laravel + React (Inertia)</strong>, serta beberapa service berbasis Docker: <strong>Jenkins</strong>, <strong>Grafana</strong>, dan <strong>n8n</strong>.
              </p>
            </div>
          </section>

          <!-- Requirements -->
          <section id="requirements">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Settings :size="28" class="text-slate-700" /> System Requirements
              </h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Monitor :size="20" class="text-blue-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">OS</p>
                    <p class="text-slate-600">Ubuntu 22.04 LTS</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Server :size="20" class="text-green-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">Panel</p>
                    <p class="text-slate-600">aaPanel (Free)</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Globe :size="20" class="text-purple-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">Web Server</p>
                    <p class="text-slate-600">Nginx</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Database :size="20" class="text-orange-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">Database</p>
                    <p class="text-slate-600">MariaDB</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Box :size="20" class="text-indigo-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">PHP</p>
                    <p class="text-slate-600">8.3</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-3">
                  <Package :size="20" class="text-green-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">Node.js</p>
                    <p class="text-slate-600">LTS</p>
                  </div>
                </div>
                <div class="p-4 rounded-lg bg-slate-50 border border-slate-200 md:col-span-2 flex items-start gap-3">
                  <Container :size="20" class="text-cyan-600 flex-shrink-0 mt-0.5" />
                  <div>
                    <p class="font-semibold text-slate-900">Docker</p>
                    <p class="text-slate-600">Docker & Docker Compose (Latest)</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 1 -->
          <section id="step1">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Wrench :size="28" class="text-blue-600" /> Step 1: System Preparation
              </h2>
              <div class="space-y-2">
                <CommandBox cmd="apt update && apt upgrade -y" />
                <CommandBox cmd="apt install -y git curl wget unzip zip htop vim net-tools" />
                <CommandBox cmd="curl -fsSL https://deb.nodesource.com/setup_lts.x | bash -" />
                <CommandBox cmd="apt install -y nodejs" />
                <CommandBox cmd="apt install -y docker.io docker-compose" />
                <CommandBox cmd="systemctl enable docker && systemctl start docker" />
              </div>
            </div>
          </section>

          <!-- Step 2 -->
          <section id="step2">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Server :size="28" class="text-green-600" /> Step 2: Setup aaPanel
              </h2>
              
              <!-- Login Instructions -->
              <div class="space-y-6">
                <div class="p-4 rounded-lg bg-blue-50 border border-blue-200">
                  <p class="font-semibold text-slate-900 mb-2">🔑 Step 2.1: Login ke aaPanel</p>
                  <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                    <li>Buka browser dan akses: <code class="bg-white px-2 py-1 rounded font-mono text-sm">http://IP-SERVER:7800</code></li>
                    <li>Login dengan username dan password yang didapat saat instalasi</li>
                    <li>Jika lupa password, reset via SSH dengan command: <code class="bg-white px-2 py-1 rounded font-mono text-sm">bt default</code></li>
                  </ol>
                </div>

                <!-- Install Software -->
                <div class="p-4 rounded-lg bg-green-50 border border-green-200">
                  <p class="font-semibold text-slate-900 mb-3">📦 Step 2.2: Install Software dari App Store</p>
                  <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                    <li>Klik menu <strong>"App Store"</strong> di sidebar kiri</li>
                    <li>Cari dan install software berikut satu per satu:</li>
                  </ol>
                  <ul class="space-y-2 ml-8 mt-3">
                    <li class="flex items-center gap-2 text-slate-700">
                      <span class="text-green-600">✓</span> 
                      <strong>Nginx</strong> - Web server (pilih versi terbaru)
                    </li>
                    <li class="flex items-center gap-2 text-slate-700">
                      <span class="text-green-600">✓</span> 
                      <strong>PHP 8.3</strong> - Pilih versi 8.3 untuk compatibility
                    </li>
                    <li class="flex items-center gap-2 text-slate-700">
                      <span class="text-green-600">✓</span> 
                      <strong>MariaDB</strong> - Database server (versi 10.6+)
                    </li>
                    <li class="flex items-center gap-2 text-slate-700">
                      <span class="text-green-600">✓</span> 
                      <strong>phpMyAdmin</strong> - Database management tool
                    </li>
                    <li class="flex items-center gap-2 text-slate-700">
                      <span class="text-green-600">✓</span> 
                      <strong>PureFTPd</strong> - FTP server (optional)
                    </li>
                  </ul>
                  <p class="text-sm text-slate-600 mt-3 ml-2">💡 <em>Tip: Tunggu hingga setiap software selesai terinstall sebelum install yang lain</em></p>
                </div>

                <!-- Firewall Configuration -->
                <div class="p-4 rounded-lg bg-orange-50 border border-orange-200">
                  <p class="font-semibold text-slate-900 mb-3">🔥 Step 2.3: Konfigurasi Firewall</p>
                  <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                    <li>Klik menu <strong>"Security"</strong> di sidebar</li>
                    <li>Pada tab <strong>"Firewall"</strong>, pastikan port berikut terbuka:</li>
                  </ol>
                  <div class="mt-3 ml-2">
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-2 mt-2">
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>80</strong> - HTTP</span>
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>443</strong> - HTTPS</span>
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>22</strong> - SSH</span>
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>3306</strong> - MySQL</span>
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>19066</strong> - Panel Port</span>
                      <span class="bg-white px-3 py-2 rounded border border-orange-300 text-center font-mono text-sm"><strong>19067</strong> - FTP</span>
                    </div>
                  </div>
                  <ol start="3" class="list-decimal list-inside space-y-2 text-slate-700 ml-2 mt-3">
                    <li>Klik <strong>"Release"</strong> untuk setiap port yang belum terbuka</li>
                    <li>Jangan lupa juga buka port di firewall VPS provider (Cloudflare, AWS, dll)</li>
                  </ol>
                </div>

                <!-- Create Database -->
                <div class="p-4 rounded-lg bg-purple-50 border border-purple-200">
                  <p class="font-semibold text-slate-900 mb-3">💾 Step 2.4: Buat Database untuk Laravel</p>
                  <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                    <li>Klik menu <strong>"Database"</strong> di sidebar</li>
                    <li>Klik tombol <strong>"Add database"</strong></li>
                    <li>Isi form:
                      <ul class="ml-6 mt-2 space-y-1">
                        <li>• Database name: <code class="bg-white px-2 py-1 rounded text-sm">laravel_db</code></li>
                        <li>• Username: <code class="bg-white px-2 py-1 rounded text-sm">laravel_user</code></li>
                        <li>• Password: (generate password yang kuat)</li>
                      </ul>
                    </li>
                    <li>Klik <strong>"Submit"</strong></li>
                    <li>Ulangi untuk database Sales App dengan nama berbeda</li>
                  </ol>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 3 -->
          <section id="step3">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Palette :size="28" class="text-purple-600" /> Step 3: Deploy Laravel + React (Inertia)
              </h2>

              <!-- Create Website in aaPanel -->
              <div class="mb-6 p-4 rounded-lg bg-blue-50 border border-blue-200">
                <p class="font-semibold text-slate-900 mb-3">🌐 Step 3.1: Buat Website di aaPanel</p>
                <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                  <li>Klik menu <strong>"Website"</strong> di sidebar aaPanel</li>
                  <li>Klik tombol <strong>"Add site"</strong></li>
                  <li>Isi form:
                    <ul class="ml-6 mt-2 space-y-1">
                      <li>• Domain: <code class="bg-white px-2 py-1 rounded text-sm">pullstack.cloud</code></li>
                      <li>• Root directory: <code class="bg-white px-2 py-1 rounded text-sm">/www/wwwroot/laravel-inertia</code></li>
                      <li>• PHP Version: <code class="bg-white px-2 py-1 rounded text-sm">PHP-83</code></li>
                      <li>• Database: Pilih database yang sudah dibuat</li>
                    </ul>
                  </li>
                  <li>Klik <strong>"Submit"</strong></li>
                </ol>
              </div>

              <!-- Upload Code -->
              <div class="mb-6 p-4 rounded-lg bg-green-50 border border-green-200">
                <p class="font-semibold text-slate-900 mb-3">💻 Step 3.2: Upload & Setup Laravel Code</p>
                <p class="text-slate-700 mb-3 ml-2">Login ke VPS via SSH dan jalankan commands berikut:</p>
              </div>
              
              <div class="mb-4 p-4 rounded-lg bg-slate-50 border border-slate-200">
                <p class="text-sm font-semibold text-slate-600 flex items-center gap-2">
                  <Folder :size="16" class="text-slate-600" /> Lokasi Project:
                </p>
                <p class="font-mono text-slate-900 mt-1">/www/wwwroot/laravel-inertia</p>
              </div>
              <div class="space-y-2 mb-6">
                <CommandBox cmd="cd /www/wwwroot/laravel-inertia" />
                <CommandBox cmd="composer install" />
                <CommandBox cmd="cp .env.example .env" />
                <CommandBox cmd="php artisan key:generate" />
                <CommandBox cmd="php artisan migrate --seed" />
                <CommandBox cmd="npm install" />
                <CommandBox cmd="npm run build" />
                <CommandBox cmd="chown -R www:www storage bootstrap/cache" />
                <CommandBox cmd="chmod -R 775 storage bootstrap/cache" />
              </div>

              <!-- Configure .env -->
              <div class="mb-6 p-4 rounded-lg bg-yellow-50 border border-yellow-200">
                <p class="font-semibold text-slate-900 mb-3">⚙️ Step 3.3: Konfigurasi File .env</p>
                <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                  <li>Edit file <code class="bg-white px-2 py-1 rounded text-sm">.env</code> dengan nano atau vim</li>
                  <li>Update konfigurasi database:
                    <div class="bg-slate-900 text-slate-100 p-3 rounded-lg font-mono text-xs mt-2">
                      <div>DB_CONNECTION=mysql</div>
                      <div>DB_HOST=127.0.0.1</div>
                      <div>DB_PORT=3306</div>
                      <div>DB_DATABASE=laravel_db</div>
                      <div>DB_USERNAME=laravel_user</div>
                      <div>DB_PASSWORD=your_password</div>
                    </div>
                  </li>
                  <li>Update APP_URL sesuai domain Anda</li>
                  <li>Save file (Ctrl+X, Y, Enter)</li>
                </ol>
              </div>

              <!-- SSL Setup -->
              <div class="mb-6 p-4 rounded-lg bg-purple-50 border border-purple-200">
                <p class="font-semibold text-slate-900 mb-3">🔒 Step 3.4: Setup SSL Certificate</p>
                <ol class="list-decimal list-inside space-y-2 text-slate-700 ml-2">
                  <li>Di aaPanel, buka halaman <strong>"Website"</strong></li>
                  <li>Klik domain <strong>pullstack.cloud</strong></li>
                  <li>Pilih tab <strong>"SSL"</strong></li>
                  <li>Pilih <strong>"Let's Encrypt"</strong></li>
                  <li>Centang domain dan www domain</li>
                  <li>Klik <strong>"Apply"</strong> dan tunggu proses selesai</li>
                  <li>Enable <strong>"Force HTTPS"</strong></li>
                </ol>
              </div>

              <!-- Nginx Config -->
              <div class="mt-6">
                <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                  <Server :size="20" class="text-purple-600" /> Nginx Config (pullstack.cloud)
                </h3>
                <div class="bg-slate-900 text-slate-100 p-4 rounded-lg font-mono text-xs overflow-x-auto">
                  <pre class="text-slate-100">server {
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
}</pre>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 4 -->
          <section id="step4">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Briefcase :size="28" class="text-indigo-600" /> Step 4: Deploy Sales Management App (Inertia React)
              </h2>
              <div class="mb-4 p-4 rounded-lg bg-slate-50 border border-slate-200">
                <p class="text-sm font-semibold text-slate-600">📁 Lokasi Project:</p>
                <p class="font-mono text-slate-900 mt-1">/www/wwwroot/sales-management-app</p>
              </div>
              <div class="space-y-2 mb-6">
                <CommandBox cmd="cd /www/wwwroot/sales-management-app" />
                <CommandBox cmd="composer install" />
                <CommandBox cmd="cp .env.example .env" />
                <CommandBox cmd="php artisan key:generate" />
                <CommandBox cmd="npm install" />
                <CommandBox cmd="npm run build" />
                <CommandBox cmd="php artisan migrate --seed" />
              </div>

              <!-- Nginx Config -->
              <div class="mt-6">
                <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                  <Server :size="20" class="text-indigo-600" /> Nginx Config (app.pullstack.cloud)
                </h3>
                <div class="bg-slate-900 text-slate-100 p-4 rounded-lg font-mono text-xs overflow-x-auto">
                  <pre class="text-slate-100">server {
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
}</pre>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 5 -->
          <section id="step5">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Container :size="28" class="text-cyan-600" /> Step 5: Docker Services
              </h2>
              <div class="space-y-6">
                <div class="border-l-4 border-blue-500 pl-6 py-4">
                  <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                    <Activity :size="20" class="text-blue-600" /> Grafana (Port 3000)
                  </h3>
                  <div class="space-y-2 mb-4">
                    <CommandBox cmd="docker run -d --name grafana -p 3000:3000 -v grafana-storage:/var/lib/grafana grafana/grafana:latest" />
                    <CommandBox cmd="docker update --restart always grafana" />
                  </div>
                  
                  <!-- Nginx Config for Grafana -->
                  <div class="mt-4">
                    <p class="text-sm font-semibold text-slate-900 mb-2">Nginx Config (grafana.pullstack.cloud):</p>
                    <div class="bg-slate-900 text-slate-100 p-3 rounded-lg font-mono text-xs overflow-x-auto">
                      <pre class="text-slate-100">server {
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
}</pre>
                    </div>
                  </div>
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4">
                  <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                    <GitBranch :size="20" class="text-orange-600" /> n8n Automation (Port 5678)
                  </h3>
                  <div class="space-y-2 mb-4">
                    <CommandBox cmd="docker run -itd --name n8n -p 5678:5678 -v ~/.n8n:/home/node/.n8n -e WEBHOOK_URL=https://n8n.pullstack.cloud n8nio/n8n" />
                    <CommandBox cmd="docker update --restart always n8n" />
                  </div>
                  
                  <!-- Nginx Config for n8n -->
                  <div class="mt-4">
                    <p class="text-sm font-semibold text-slate-900 mb-2">Nginx Config (n8n.pullstack.cloud):</p>
                    <div class="bg-slate-900 text-slate-100 p-3 rounded-lg font-mono text-xs overflow-x-auto">
                      <pre class="text-slate-100">server {
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
}</pre>
                    </div>
                  </div>
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4">
                  <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                    <Settings :size="20" class="text-green-600" /> Jenkins CI/CD (Port 14808)
                  </h3>
                  <div class="space-y-2 mb-4">
                    <CommandBox cmd="docker run -d --name jenkins -p 14808:14808 -p 50000:50000 -v jenkins_home:/var/jenkins_home jenkins/jenkins:lts" />
                    <CommandBox cmd="docker update --restart always jenkins" />
                  </div>
                  
                  <!-- Nginx Config for Jenkins -->
                  <div class="mt-4">
                    <p class="text-sm font-semibold text-slate-900 mb-2">Nginx Config (jenkins.pullstack.cloud):</p>
                    <div class="bg-slate-900 text-slate-100 p-3 rounded-lg font-mono text-xs overflow-x-auto">
                      <pre class="text-slate-100">server {
    listen 80;
    listen 443 ssl http2;
    server_name jenkins.pullstack.cloud;

    ssl_certificate     /www/server/panel/vhost/cert/jenkins.pullstack.cloud/fullchain.pem;
    ssl_certificate_key /www/server/panel/vhost/cert/jenkins.pullstack.cloud/privkey.pem;

    location / {
        proxy_pass http://127.0.0.1:14808;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto https;
    }

    location ~ ^/ws/(.*) {
        proxy_pass http://127.0.0.1:14808;
        proxy_http_version 1.1;
        proxy_set_header Upgrade $http_upgrade;
        proxy_set_header Connection "upgrade";
        proxy_set_header Host $host;
    }
}</pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 6 -->
          <section id="step6">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Globe :size="28" class="text-blue-600" /> Step 6: DNS Records
              </h2>
              <div class="overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b-2 border-slate-200">
                      <th class="text-left py-3 px-4 font-semibold text-slate-900">Type</th>
                      <th class="text-left py-3 px-4 font-semibold text-slate-900">Name</th>
                      <th class="text-left py-3 px-4 font-semibold text-slate-900">Value</th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-slate-200">
                    <tr><td class="py-3 px-4">A</td><td class="py-3 px-4 font-mono">pullstack.cloud</td><td class="py-3 px-4 font-mono">31.97.188.192</td></tr>
                    <tr><td class="py-3 px-4">A</td><td class="py-3 px-4 font-mono">app.pullstack.cloud</td><td class="py-3 px-4 font-mono">31.97.188.192</td></tr>
                    <tr><td class="py-3 px-4">A</td><td class="py-3 px-4 font-mono">grafana.pullstack.cloud</td><td class="py-3 px-4 font-mono">31.97.188.192</td></tr>
                    <tr><td class="py-3 px-4">A</td><td class="py-3 px-4 font-mono">jenkins.pullstack.cloud</td><td class="py-3 px-4 font-mono">31.97.188.192</td></tr>
                    <tr><td class="py-3 px-4">A</td><td class="py-3 px-4 font-mono">n8n.pullstack.cloud</td><td class="py-3 px-4 font-mono">31.97.188.192</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>

          <!-- Step 7 -->
          <section id="step7">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <CheckCircle :size="28" class="text-green-600" /> Step 7: Finalization
              </h2>
              <div class="space-y-2">
                <CommandBox cmd="nginx -t" />
                <CommandBox cmd="service nginx reload" />
                <CommandBox cmd="php artisan optimize:clear" />
                <CommandBox cmd="service php-fpm restart" />
              </div>
            </div>
          </section>

          <!-- Access Summary -->
          <section id="access" class="pb-12">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Compass :size="28" class="text-purple-600" /> Access Summary
              </h2>
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <ServiceLink title="Laravel" url="https://pullstack.cloud" desc="Landing Page" icon="🚀" />
                <ServiceLink title="Sales App" url="https://app.pullstack.cloud" desc="Inertia + React" icon="💼" />
                <ServiceLink title="Grafana" url="https://grafana.pullstack.cloud" desc="Monitoring" icon="📈" />
                <ServiceLink title="Jenkins" url="https://jenkins.pullstack.cloud" desc="CI/CD" icon="🔧" />
                <ServiceLink title="n8n" url="https://n8n.pullstack.cloud" desc="Automation" icon="⚙️" />
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { 
  BookOpen, 
  Rocket, 
  Settings, 
  Wrench, 
  Palette, 
  Briefcase, 
  Container, 
  Globe, 
  CheckCircle, 
  Compass, 
  Server, 
  Database, 
  Box, 
  Package, 
  Monitor, 
  Activity, 
  GitBranch, 
  BarChart3,
  Copy,
  ExternalLink
} from 'lucide-vue-next';

const CommandBox = {
  props: ['cmd'],
  setup(props) {
    const copied = ref(false);
    const copy = () => {
      navigator.clipboard.writeText(props.cmd);
      copied.value = true;
      setTimeout(() => copied.value = false, 2000);
    };
    return { copied, copy };
  },
  template: `
    <div class="p-3 rounded-lg bg-slate-900 text-slate-100 font-mono text-sm overflow-x-auto hover:bg-slate-800 transition cursor-pointer group" @click="copy">
      <div class="flex justify-between items-start">
        <span class="flex-1">{{ cmd }}</span>
        <Copy :size="16" class="text-slate-400 group-hover:text-slate-300 flex-shrink-0 ml-2" />
      </div>
      <div v-if="copied" class="text-xs text-green-400 mt-1 flex items-center gap-1">
        <CheckCircle :size="12" /> Copied!
      </div>
    </div>
  `
};

const ServiceLink = {
  props: ['title', 'url', 'desc', 'icon'],
  template: `
    <a :href="url" target="_blank" class="rounded-lg border border-slate-200 bg-white p-6 hover:border-blue-500 hover:shadow-md transition group">
      <div class="mb-4">
        <component :is="getIcon()" :size="32" class="text-blue-600 group-hover:scale-110 transition" />
      </div>
      <h3 class="font-semibold text-slate-900 mb-1">{{ title }}</h3>
      <p class="text-sm text-slate-600 mb-3">{{ desc }}</p>
      <div class="text-sm text-blue-600 font-medium flex items-center gap-1">{{ url }} <ExternalLink :size="14" /></div>
    </a>
  `,
  methods: {
    getIcon() {
      const icons = { Laravel: Rocket, 'Sales App': Briefcase, Grafana: BarChart3, Jenkins: Settings, n8n: Activity };
      return icons[this.title] || Rocket;
    }
  }
};
</script>

<style scoped>
section { scroll-margin-top: 6rem; }
</style>