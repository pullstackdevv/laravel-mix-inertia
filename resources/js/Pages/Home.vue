<!-- This is Home.vue - Landing Page -->
<template>
  <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900">
    <!-- Navigation -->
    <nav class="border-b border-slate-700 bg-slate-900/50 backdrop-blur-md sticky top-0 z-50">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
          <div class="flex items-center gap-3">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-gradient-to-br from-blue-600 to-blue-700">
              <BookOpen :size="20" class="text-white" />
            </div>
            <h1 class="text-xl font-bold text-white">VPS Deployment Docs</h1>
          </div>
          <Link href="/docs" class="px-6 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium transition">
            View Documentation →
          </Link>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20">
      <div class="text-center mb-16">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          VPS Deployment Setup
        </h1>
        <p class="text-xl text-slate-300 mb-8 max-w-2xl mx-auto">
          Dokumentasi lengkap untuk setup server VPS Ubuntu 22.04 dengan aaPanel, Docker, Laravel, React, Jenkins, Grafana, dan n8n
        </p>
        <Link href="/docs" class="inline-block px-8 py-4 rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold transition transform hover:scale-105">
          📖 Baca Dokumentasi Lengkap
        </Link>
      </div>

      <!-- Features Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-blue-400">
            <Rocket :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">System Preparation</h3>
          <p class="text-slate-400">Setup lengkap Ubuntu 22.04, Node.js, Docker, dan dependencies</p>
        </div>

        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-green-400">
            <Wrench :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">aaPanel Setup</h3>
          <p class="text-slate-400">Konfigurasi panel kontrol gratis dengan Nginx, PHP 8.3, MariaDB</p>
        </div>

        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-purple-400">
            <Palette :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">Laravel + React</h3>
          <p class="text-slate-400">Deploy aplikasi modern dengan Inertia.js dan React</p>
        </div>

        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-cyan-400">
            <Container :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">Docker Services</h3>
          <p class="text-slate-400">Setup Grafana, Jenkins, dan n8n dalam container</p>
        </div>

        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-red-400">
            <Lock :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">SSL & Security</h3>
          <p class="text-slate-400">Konfigurasi SSL, reverse proxy Nginx, dan firewall</p>
        </div>

        <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 hover:border-blue-500 transition">
          <div class="mb-4 text-yellow-400">
            <Globe :size="40" />
          </div>
          <h3 class="text-xl font-bold text-white mb-2">DNS & Domains</h3>
          <p class="text-slate-400">Setup DNS records dan multiple subdomains</p>
        </div>
      </div>

      <!-- Services Overview -->
      <div class="rounded-xl border border-slate-700 bg-slate-800/50 p-8 mb-16">
        <h2 class="text-3xl font-bold text-white mb-8">Services yang Akan Di-Deploy</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
          <div class="text-center p-4 rounded-lg bg-slate-700/50 hover:bg-slate-700 transition">
            <div class="flex justify-center mb-2 text-blue-400">
              <Rocket :size="32" />
            </div>
            <p class="font-semibold text-white">Laravel</p>
            <p class="text-sm text-slate-400 mt-1">pullstack.cloud</p>
          </div>
          <div class="text-center p-4 rounded-lg bg-slate-700/50 hover:bg-slate-700 transition">
            <div class="flex justify-center mb-2 text-green-400">
              <Briefcase :size="32" />
            </div>
            <p class="font-semibold text-white">Sales App</p>
            <p class="text-sm text-slate-400 mt-1">app.pullstack.cloud</p>
          </div>
          <div class="text-center p-4 rounded-lg bg-slate-700/50 hover:bg-slate-700 transition">
            <div class="flex justify-center mb-2 text-purple-400">
              <BarChart3 :size="32" />
            </div>
            <p class="font-semibold text-white">Grafana</p>
            <p class="text-sm text-slate-400 mt-1">grafana.pullstack.cloud</p>
          </div>
          <div class="text-center p-4 rounded-lg bg-slate-700/50 hover:bg-slate-700 transition">
            <div class="flex justify-center mb-2 text-orange-400">
              <Settings :size="32" />
            </div>
            <p class="font-semibold text-white">Jenkins</p>
            <p class="text-sm text-slate-400 mt-1">jenkins.pullstack.cloud</p>
          </div>
          <div class="text-center p-4 rounded-lg bg-slate-700/50 hover:bg-slate-700 transition">
            <div class="flex justify-center mb-2 text-cyan-400">
              <Settings :size="32" />
            </div>
            <p class="font-semibold text-white">n8n</p>
            <p class="text-sm text-slate-400 mt-1">n8n.pullstack.cloud</p>
          </div>
        </div>
      </div>

      <!-- CTA Section -->
      <div class="text-center">
        <p class="text-slate-400 mb-6">Siap untuk setup VPS Anda?</p>
        <Link href="/docs" class="inline-block px-8 py-4 rounded-lg bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold transition transform hover:scale-105">
          Mulai Baca Dokumentasi →
        </Link>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';
import { 
  BookOpen, 
  Rocket, 
  Wrench, 
  Palette, 
  Container, 
  Lock, 
  Globe, 
  Briefcase, 
  BarChart3, 
  Settings 
} from 'lucide-vue-next';

// This file remains as the home page
// Documentation page will be created separately
</script>
