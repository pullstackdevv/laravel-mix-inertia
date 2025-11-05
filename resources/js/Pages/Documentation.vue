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
              <div class="space-y-4">
                <div class="p-4 rounded-lg bg-blue-50 border border-blue-200">
                  <p class="font-semibold text-slate-900">Login URL:</p>
                  <p class="font-mono text-slate-700 mt-1">http://IP-SERVER:7800</p>
                </div>
                <div>
                  <p class="font-semibold text-slate-900 mb-3">Install from App Store:</p>
                  <ul class="space-y-2 ml-4">
                    <li class="flex items-center gap-2 text-slate-700"><span class="text-green-600">✓</span> Nginx</li>
                    <li class="flex items-center gap-2 text-slate-700"><span class="text-green-600">✓</span> PHP 8.3</li>
                    <li class="flex items-center gap-2 text-slate-700"><span class="text-green-600">✓</span> MariaDB</li>
                    <li class="flex items-center gap-2 text-slate-700"><span class="text-green-600">✓</span> phpMyAdmin</li>
                    <li class="flex items-center gap-2 text-slate-700"><span class="text-green-600">✓</span> PureFTPd</li>
                  </ul>
                </div>
                <div>
                  <p class="font-semibold text-slate-900 mb-2">Open Firewall Ports:</p>
                  <p class="font-mono text-slate-700 bg-slate-50 p-3 rounded">80, 443, 22, 3306, 19066, 19067</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Step 3 -->
          <section id="step3">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Palette :size="28" class="text-purple-600" /> Step 3: Deploy Laravel + React
              </h2>
              <div class="mb-4 p-4 rounded-lg bg-slate-50 border border-slate-200">
                <p class="text-sm font-semibold text-slate-600">📁 Location:</p>
                <p class="font-mono text-slate-900 mt-1">/www/wwwroot/laravel-inertia</p>
              </div>
              <div class="space-y-2">
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
            </div>
          </section>

          <!-- Step 4 -->
          <section id="step4">
            <div class="rounded-xl border border-slate-200 bg-white p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-slate-900 mb-6 flex items-center gap-3">
                <Briefcase :size="28" class="text-indigo-600" /> Step 4: Deploy Sales App
              </h2>
              <div class="mb-4 p-4 rounded-lg bg-slate-50 border border-slate-200">
                <p class="text-sm font-semibold text-slate-600">📁 Location:</p>
                <p class="font-mono text-slate-900 mt-1">/www/wwwroot/sales-management-app</p>
              </div>
              <div class="space-y-2">
                <CommandBox cmd="cd /www/wwwroot/sales-management-app" />
                <CommandBox cmd="composer install && npm install" />
                <CommandBox cmd="cp .env.example .env && php artisan key:generate" />
                <CommandBox cmd="npm run build && php artisan migrate --seed" />
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
                  <CommandBox cmd="docker run -d --name grafana -p 3000:3000 -v grafana-storage:/var/lib/grafana grafana/grafana:latest" />
                  <CommandBox cmd="docker update --restart always grafana" />
                </div>
                <div class="border-l-4 border-orange-500 pl-6 py-4">
                  <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                    <GitBranch :size="20" class="text-orange-600" /> n8n (Port 5678)
                  </h3>
                  <CommandBox cmd="docker run -itd --name n8n -p 5678:5678 -v ~/.n8n:/home/node/.n8n -e WEBHOOK_URL=https://n8n.pullstack.cloud n8nio/n8n" />
                  <CommandBox cmd="docker update --restart always n8n" />
                </div>
                <div class="border-l-4 border-green-500 pl-6 py-4">
                  <h3 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                    <Settings :size="20" class="text-green-600" /> Jenkins (Port 8080)
                  </h3>
                  <CommandBox cmd="docker run -d --name jenkins -p 8080:8080 -p 50000:50000 -v jenkins_home:/var/jenkins_home jenkins/jenkins:lts" />
                  <CommandBox cmd="docker update --restart always jenkins" />
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