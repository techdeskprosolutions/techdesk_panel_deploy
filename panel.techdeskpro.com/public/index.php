<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechDesk Pro • Homelab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');
        body { font-family: 'Inter', system-ui, sans-serif; }
    </style>
</head>
<body class="bg-slate-950 text-slate-200 min-h-screen">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <div class="flex justify-between items-center mb-12">
            <div>
                <h1 class="text-5xl font-semibold tracking-tight text-white">TechDesk Pro</h1>
                <p class="text-xl text-cyan-400">Homelab Control Panel</p>
            </div>
            <div class="text-right">
                <p class="text-sm text-slate-400">Sunday, May 24 2026 • 18:06 EDT</p>
                <div class="flex items-center gap-2 justify-end text-emerald-400">
                    <div class="w-3 h-3 bg-emerald-400 rounded-full animate-pulse"></div>
                    All Systems Online
                </div>
            </div>
        </div>

        <!-- Service Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <a href="https://npm.panel.techdeskpro.com" target="_blank" class="block bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded-3xl p-8 transition-all hover:scale-105 hover:border-cyan-400 group">
                <i class="fa-solid fa-globe text-5xl text-cyan-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-1">Nginx Proxy Manager</h3>
                <p class="text-slate-400">Reverse proxy + SSL</p>
                <span class="text-xs text-cyan-400 mt-8 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Open → <i class="fa-solid fa-arrow-right"></i></span>
            </a>

            <a href="https://db.panel.techdeskpro.com" target="_blank" class="block bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded-3xl p-8 transition-all hover:scale-105 hover:border-cyan-400 group">
                <i class="fa-solid fa-database text-5xl text-emerald-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-1">phpMyAdmin</h3>
                <p class="text-slate-400">Database management</p>
                <span class="text-xs text-cyan-400 mt-8 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Open → <i class="fa-solid fa-arrow-right"></i></span>
            </a>

            <a href="https://vpn.panel.techdeskpro.com" target="_blank" class="block bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded-3xl p-8 transition-all hover:scale-105 hover:border-cyan-400 group">
                <i class="fa-solid fa-shield-halved text-5xl text-violet-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-1">WireGuard VPN</h3>
                <p class="text-slate-400">Secure remote access</p>
                <span class="text-xs text-cyan-400 mt-8 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Open → <i class="fa-solid fa-arrow-right"></i></span>
            </a>

            <a href="https://portainer.panel.techdeskpro.com" target="_blank" class="block bg-slate-900 hover:bg-slate-800 border border-slate-700 rounded-3xl p-8 transition-all hover:scale-105 hover:border-cyan-400 group">
                <i class="fa-solid fa-docker text-5xl text-blue-400 mb-6"></i>
                <h3 class="text-2xl font-semibold mb-1">Portainer</h3>
                <p class="text-slate-400">Docker containers + ports</p>
                <span class="text-xs text-cyan-400 mt-8 inline-flex items-center gap-1 group-hover:gap-2 transition-all">Open → <i class="fa-solid fa-arrow-right"></i></span>
            </a>
        </div>

        <!-- Overview Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="bg-slate-900 border border-slate-700 rounded-3xl p-8">
                <h2 class="text-xl font-semibold mb-6 flex items-center gap-3"><i class="fa-solid fa-cube"></i> Docker Containers</h2>
                <p class="text-slate-400 mb-6">Live view of every container, status, CPU/RAM usage, and exposed ports.</p>
                <a href="https://portainer.panel.techdeskpro.com" target="_blank" class="inline-flex items-center gap-2 bg-white text-slate-900 px-6 py-3 rounded-2xl font-medium hover:bg-cyan-400 transition-colors">
                    <i class="fa-solid fa-docker"></i>
                    Open Portainer Dashboard
                </a>
            </div>

            <div class="bg-slate-900 border border-slate-700 rounded-3xl p-8">
                <h2 class="text-xl font-semibold mb-6 flex items-center gap-3"><i class="fa-solid fa-plug"></i> Open Ports on Server</h2>
                <p class="text-slate-400 mb-6">All ports exposed by containers (viewable in Portainer) + host-level ports via SSH if needed.</p>
                <div class="text-sm text-slate-400 bg-slate-800 rounded-2xl p-4 font-mono">
                    • 80, 443 (NPM)<br>
                    • 81 (NPM Admin)<br>
                    • 51820/udp (WireGuard)<br>
                    • 9000 (Portainer internal)
                </div>
                <p class="text-xs text-slate-500 mt-6">Full live port list available inside Portainer → Containers</p>
            </div>
        </div>
    </div>
</body>
</html>
