<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IKBAL MIFTAHUDIN | Full-Stack Developer</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Fonts & Alpine.js CDN for Mobile Menu Interactive -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #070b14;
            color: #f1f5f9;
        }

        /* Animated Stars Movement */
        @keyframes moveStars {
            0% { background-position: 0 0; }
            100% { background-position: 350px 700px; }
        }

        .stars-bg {
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 40px 70px, rgba(255,255,255,0.8), rgba(0,0,0,0)),
                radial-gradient(1px 1px at 90px 40px, #ffffff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 160px 120px, rgba(56,189,248,0.9), rgba(0,0,0,0)),
                radial-gradient(1.5px 1.5px at 230px 190px, #ffffff, rgba(0,0,0,0));
            background-repeat: repeat;
            background-size: 350px 350px;
            animation: moveStars 40s linear infinite;
        }

        .glass-card {
            background: rgba(15, 23, 42, 0.55);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }
        
        .glass-card:hover {
            background: rgba(15, 23, 42, 0.75);
            border-color: rgba(56, 189, 248, 0.4);
            box-shadow: 0 12px 40px -10px rgba(14, 165, 233, 0.25);
        }

        /* --- CUSTOM SCROLLBAR FOR SCROLLABLE SECTIONS --- */
        .custom-scrollbar::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: rgba(56, 189, 248, 0.3);
            border-radius: 10px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: rgba(56, 189, 248, 0.7);
        }
    </style>
</head>
<body x-data="{ mobileMenuOpen: false }" class="stars-bg antialiased min-h-screen relative overflow-x-hidden pb-12">

    <!-- Ambient Glowing Background -->
    <div class="fixed top-[-10%] left-1/2 -translate-x-1/2 w-[300px] sm:w-[600px] lg:w-[800px] h-[300px] sm:h-[500px] bg-gradient-to-tr from-cyan-500/20 via-indigo-500/20 to-purple-500/10 blur-[90px] sm:blur-[120px] pointer-events-none -z-10 rounded-full animate-pulse"></div>

    <!-- HEADER / NAVIGATION BAR -->
    <header class="sticky top-3 sm:top-4 z-50 max-w-6xl mx-auto px-3 sm:px-4 mb-6 sm:mb-8">
        <nav class="glass-card rounded-2xl px-4 sm:px-6 py-3 flex items-center justify-between relative">
            <a href="#" class="font-black text-base sm:text-xl tracking-wider text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-indigo-400">
                IKBAL MIFTAHUDIN
            </a>
            
            <!-- Desktop Links -->
            <ul class="hidden md:flex items-center gap-6 lg:gap-8 text-xs lg:text-sm font-bold text-slate-300">
                <li><a href="#about" class="hover:text-cyan-400 transition">About</a></li>
                <li><a href="#tech" class="hover:text-cyan-400 transition">Tech Stack</a></li>
                <li><a href="#projects" class="hover:text-cyan-400 transition">Projects</a></li>
                <li><a href="#education" class="hover:text-cyan-400 transition">Education</a></li>
                <li><a href="#contact" class="hover:text-cyan-400 transition">Contact</a></li>
            </ul>

            <!-- Mobile Hamburger Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 text-slate-300 hover:text-cyan-400 focus:outline-none">
                <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <!-- Mobile Menu Dropdown -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 @click.outside="mobileMenuOpen = false"
                 class="absolute top-full left-0 right-0 mt-3 p-4 glass-card rounded-2xl md:hidden border border-white/10 flex flex-col gap-3 font-bold text-sm text-slate-200 shadow-2xl z-50">
                <a @click="mobileMenuOpen = false" href="#about" class="hover:text-cyan-400 transition py-1 border-b border-white/5">About Me</a>
                <a @click="mobileMenuOpen = false" href="#tech" class="hover:text-cyan-400 transition py-1 border-b border-white/5">Tech Stack & Tools</a>
                <a @click="mobileMenuOpen = false" href="#projects" class="hover:text-cyan-400 transition py-1 border-b border-white/5">Featured Projects</a>
                <a @click="mobileMenuOpen = false" href="#education" class="hover:text-cyan-400 transition py-1 border-b border-white/5">Education & Certs</a>
                <a @click="mobileMenuOpen = false" href="#contact" class="hover:text-cyan-400 transition py-1">Contact Me</a>
            </div>
        </nav>
    </header>

    <!-- MAIN BENTO GRID CONTAINER -->
    <main class="max-w-6xl mx-auto px-3 sm:px-4 space-y-4 sm:space-y-6">

        <!-- ROW 1: HERO SECTION & TECH STACK -->
        <div class="grid lg:grid-cols-12 gap-4 sm:gap-6 items-stretch">
            
            <!-- HERO CARD (Col 7) -->
            <section class="lg:col-span-7 glass-card rounded-3xl p-6 sm:p-8 lg:p-10 flex flex-col justify-between space-y-4 sm:space-y-6 relative overflow-hidden">
                <div class="space-y-3">
                    <!-- Status Indicator Badge -->
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-[10px] sm:text-xs font-bold">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>Available for Freelance & Full-Time Work</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black tracking-tight leading-tight text-white">
                        FULL-STACK<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-sky-300 to-indigo-300">DEVELOPER</span>
                    </h1>
                    <p class="text-slate-400 font-medium text-xs sm:text-base leading-relaxed max-w-lg">
                        Membangun aplikasi web modern, aman, responsif, dan scalable dengan arsitektur bersih.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3 sm:gap-4 pt-2">
                    <a href="#projects" class="w-full sm:w-auto text-center bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold text-xs sm:text-sm px-6 py-3 rounded-xl transition shadow-lg shadow-cyan-500/30 flex items-center justify-center gap-2">
                        <span>📁</span> Lihat Proyek
                    </a>
                    <a href="#" class="w-full sm:w-auto text-center glass-card hover:bg-slate-800 text-slate-200 font-bold text-xs sm:text-sm px-6 py-3 rounded-xl transition flex items-center justify-center gap-2">
                        <span>📄</span> Download CV
                    </a>
                </div>
            </section>

            <!-- TECH STACK & TOOLS CARD (Col 5) -->
            <section id="tech" class="lg:col-span-5 glass-card rounded-3xl p-5 sm:p-8 flex flex-col justify-between space-y-4 sm:space-y-6">
                <h2 class="text-[10px] sm:text-xs font-black tracking-widest text-cyan-400 uppercase">TECH STACK & TOOLS</h2>
                
                <div class="grid grid-cols-3 gap-2 sm:gap-4 text-xs">
                    <div class="space-y-2 sm:space-y-3">
                        <h3 class="font-bold text-slate-300 text-[10px] sm:text-[11px] border-b border-white/10 pb-1">Backend</h3>
                        <ul class="space-y-1.5 sm:space-y-2 text-slate-400 font-bold text-[11px] sm:text-xs">
                            <li class="flex items-center gap-1.5"><span class="text-indigo-400">🐘</span> PHP</li>
                            <li class="flex items-center gap-1.5"><span class="text-red-400">🔥</span> Laravel</li>
                            <li class="flex items-center gap-1.5"><span class="text-blue-400">🐬</span> MySQL</li>
                            <li class="flex items-center gap-1.5"><span class="text-emerald-400">⚡</span> REST API</li>
                        </ul>
                    </div>

                    <div class="space-y-2 sm:space-y-3">
                        <h3 class="font-bold text-slate-300 text-[10px] sm:text-[11px] border-b border-white/10 pb-1">Frontend</h3>
                        <ul class="space-y-1.5 sm:space-y-2 text-slate-400 font-bold text-[11px] sm:text-xs">
                            <li class="flex items-center gap-1.5"><span class="text-orange-400">🌐</span> HTML5</li>
                            <li class="flex items-center gap-1.5"><span class="text-sky-400">🎨</span> CSS3</li>
                            <li class="flex items-center gap-1.5"><span class="text-yellow-400">📜</span> JS ES6+</li>
                            <li class="flex items-center gap-1.5"><span class="text-cyan-400">🌀</span> Tailwind v4</li>
                        </ul>
                    </div>

                    <div class="space-y-2 sm:space-y-3">
                        <h3 class="font-bold text-slate-300 text-[10px] sm:text-[11px] border-b border-white/10 pb-1">Tools</h3>
                        <ul class="space-y-1.5 sm:space-y-2 text-slate-400 font-bold text-[11px] sm:text-xs">
                            <li class="flex items-center gap-1.5"><span class="text-orange-400">🐙</span> GitHub</li>
                            <li class="flex items-center gap-1.5"><span class="text-blue-400">💻</span> VS Code</li>
                            <li class="flex items-center gap-1.5"><span class="text-orange-400">📮</span> Postman</li>
                            <li class="flex items-center gap-1.5"><span class="text-cyan-300">🐘</span> Laragon</li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>

        <!-- ROW 2: ABOUT ME, QUICK STATS & FEATURED PROJECTS -->
        <div class="grid lg:grid-cols-12 gap-4 sm:gap-6 items-stretch">
            
            <!-- LEFT COLUMN (Col 5): ABOUT ME & METRICS -->
            <div class="lg:col-span-5 flex flex-col gap-4 sm:gap-6">
                <!-- ABOUT ME CARD -->
                <section id="about" class="glass-card rounded-3xl p-5 sm:p-8 space-y-4 flex-1 flex flex-col justify-between">
                    <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4 items-start">
                        <div class="w-24 h-28 sm:w-28 sm:h-32 rounded-2xl bg-slate-900/80 border border-white/20 overflow-hidden shrink-0 flex items-center justify-center relative shadow-inner mx-auto sm:mx-0">
                            <div class="text-center">
                                <div class="w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-full bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-base sm:text-lg mb-1">
                                    IM
                                </div>
                                <span class="text-[9px] sm:text-[10px] text-slate-400 font-bold">Foto Profil</span>
                            </div>
                        </div>

                        <div class="space-y-1.5 sm:space-y-2 text-center sm:text-left">
                            <h2 class="text-[10px] sm:text-xs font-black tracking-widest text-cyan-400 uppercase">ABOUT ME</h2>
                            <h3 class="font-extrabold text-base sm:text-lg text-slate-100">Ikbal Miftahudin</h3>
                            <p class="text-xs text-slate-400 font-medium leading-relaxed">
                                Full-Stack Web Developer yang berfokus membangun aplikasi web responsif, aman, dan efisien menggunakan Laravel & Tailwind CSS.
                            </p>
                        </div>
                    </div>

                    <div class="pt-3 border-t border-white/10 flex items-center justify-between text-xs text-slate-400 font-bold">
                        <span>Contact Links:</span>
                        <div class="flex gap-3 text-base">
                            <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="hover:text-cyan-400 transition">🐙</a>
                            <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-cyan-400 transition">💼</a>
                            <a href="mailto:ikbalmiftahudin15@upi.edu" class="hover:text-cyan-400 transition">✉️</a>
                        </div>
                    </div>
                </section>

                <!-- STATS & HIGHLIGHTS CARD (METRICS) -->
                <section class="glass-card rounded-3xl p-4 sm:p-5 grid grid-cols-3 gap-2 text-center">
                    <div class="p-2 bg-slate-900/40 rounded-2xl border border-white/5">
                        <span class="block text-xl sm:text-2xl font-black text-cyan-400">10+</span>
                        <span class="text-[9px] sm:text-[10px] font-bold text-slate-400 uppercase">Projects</span>
                    </div>
                    <div class="p-2 bg-slate-900/40 rounded-2xl border border-white/5">
                        <span class="block text-xl sm:text-2xl font-black text-sky-400">2+</span>
                        <span class="text-[9px] sm:text-[10px] font-bold text-slate-400 uppercase">Years Exp.</span>
                    </div>
                    <div class="p-2 bg-slate-900/40 rounded-2xl border border-white/5">
                        <span class="block text-xl sm:text-2xl font-black text-indigo-400">100%</span>
                        <span class="text-[9px] sm:text-[10px] font-bold text-slate-400 uppercase">Responsive</span>
                    </div>
                </section>
            </div>

            <!-- FEATURED PROJECTS CARD (Col 7 - RESPONSIVE SCROLL/GRID) -->
            <section id="projects" class="lg:col-span-7 glass-card rounded-3xl p-5 sm:p-8 space-y-4 flex flex-col justify-between overflow-hidden">
                <div class="flex items-center justify-between">
                    <h2 class="text-[10px] sm:text-xs font-black tracking-widest text-cyan-400 uppercase">FEATURED PROJECTS</h2>
                    <span class="text-[9px] sm:text-[10px] text-slate-400 font-bold bg-white/5 px-2.5 py-1 rounded-full border border-white/10">
                        Swipe / Scroll ➔
                    </span>
                </div>
                
                <!-- Container Responsive -->
                <div class="custom-scrollbar overflow-x-auto lg:overflow-y-auto lg:max-h-[420px] pb-3 lg:pb-0 pr-1 snap-x snap-mandatory">
                    <div class="flex lg:grid lg:grid-cols-2 gap-3 sm:gap-4 w-max lg:w-full">
                        
                        <!-- Project Item 1 -->
                        <div class="snap-start group w-[250px] sm:w-[280px] lg:w-auto bg-slate-900/60 border border-white/10 rounded-2xl p-3.5 sm:p-4 space-y-3 flex flex-col justify-between hover:border-cyan-500 transition shrink-0">
                            <div class="h-28 sm:h-32 bg-slate-950/80 rounded-xl border border-white/5 overflow-hidden relative flex items-center justify-center">
                                <div class="text-slate-500 text-[11px] sm:text-xs font-bold group-hover:scale-105 transition-transform duration-300">
                                    [ Preview E-Commerce ]
                                </div>
                            </div>
                            <div>
                                <h3 class="font-extrabold text-xs sm:text-sm text-slate-200 group-hover:text-cyan-300 transition">E-Commerce Platform</h3>
                                <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium mt-1 leading-snug">
                                    Toko online dengan payment gateway Midtrans & fitur multi-vendor.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-[9px] bg-cyan-500/20 text-cyan-300 px-2 py-0.5 rounded font-black">PHP</span>
                                <span class="text-[9px] bg-indigo-500/20 text-indigo-300 px-2 py-0.5 rounded font-black">Laravel</span>
                            </div>
                            <div class="flex gap-2 pt-1 text-xs">
                                <a href="#" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold px-3 py-1 rounded-lg text-[10px] transition">Demo Live</a>
                                <a href="#" class="glass-card hover:bg-slate-800 text-slate-200 font-bold px-3 py-1 rounded-lg text-[10px] transition">Source</a>
                            </div>
                        </div>

                        <!-- Project Item 2 -->
                        <div class="snap-start group w-[250px] sm:w-[280px] lg:w-auto bg-slate-900/60 border border-white/10 rounded-2xl p-3.5 sm:p-4 space-y-3 flex flex-col justify-between hover:border-cyan-500 transition shrink-0">
                            <div class="h-28 sm:h-32 bg-slate-950/80 rounded-xl border border-white/5 overflow-hidden relative flex items-center justify-center">
                                <div class="text-slate-500 text-[11px] sm:text-xs font-bold group-hover:scale-105 transition-transform duration-300">
                                    [ Preview CRM ]
                                </div>
                            </div>
                            <div>
                                <h3 class="font-extrabold text-xs sm:text-sm text-slate-200 group-hover:text-cyan-300 transition">CRM Dashboard</h3>
                                <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium mt-1 leading-snug">
                                    Aplikasi manajemen hubungan pelanggan dan analisa data statistik.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-[9px] bg-amber-500/20 text-amber-300 px-2 py-0.5 rounded font-black">JS ES6</span>
                                <span class="text-[9px] bg-cyan-500/20 text-cyan-300 px-2 py-0.5 rounded font-black">Tailwind</span>
                            </div>
                            <div class="flex gap-2 pt-1 text-xs">
                                <a href="#" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold px-3 py-1 rounded-lg text-[10px] transition">Demo Live</a>
                                <a href="#" class="glass-card hover:bg-slate-800 text-slate-200 font-bold px-3 py-1 rounded-lg text-[10px] transition">Source</a>
                            </div>
                        </div>

                        <!-- Project Item 3 -->
                        <div class="snap-start group w-[250px] sm:w-[280px] lg:w-auto bg-slate-900/60 border border-white/10 rounded-2xl p-3.5 sm:p-4 space-y-3 flex flex-col justify-between hover:border-cyan-500 transition shrink-0">
                            <div class="h-28 sm:h-32 bg-slate-950/80 rounded-xl border border-white/5 overflow-hidden relative flex items-center justify-center">
                                <div class="text-slate-500 text-[11px] sm:text-xs font-bold group-hover:scale-105 transition-transform duration-300">
                                    [ Preview Inventory ]
                                </div>
                            </div>
                            <div>
                                <h3 class="font-extrabold text-xs sm:text-sm text-slate-200 group-hover:text-cyan-300 transition">Inventory System</h3>
                                <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium mt-1 leading-snug">
                                    Sistem pencatatan stok gudang & manajemen supplier secara real-time.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-[9px] bg-red-500/20 text-red-300 px-2 py-0.5 rounded font-black">Laravel</span>
                                <span class="text-[9px] bg-blue-500/20 text-blue-300 px-2 py-0.5 rounded font-black">MySQL</span>
                            </div>
                            <div class="flex gap-2 pt-1 text-xs">
                                <a href="#" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold px-3 py-1 rounded-lg text-[10px] transition">Demo Live</a>
                                <a href="#" class="glass-card hover:bg-slate-800 text-slate-200 font-bold px-3 py-1 rounded-lg text-[10px] transition">Source</a>
                            </div>
                        </div>

                        <!-- Project Item 4 -->
                        <div class="snap-start group w-[250px] sm:w-[280px] lg:w-auto bg-slate-900/60 border border-white/10 rounded-2xl p-3.5 sm:p-4 space-y-3 flex flex-col justify-between hover:border-cyan-500 transition shrink-0">
                            <div class="h-28 sm:h-32 bg-slate-950/80 rounded-xl border border-white/5 overflow-hidden relative flex items-center justify-center">
                                <div class="text-slate-500 text-[11px] sm:text-xs font-bold group-hover:scale-105 transition-transform duration-300">
                                    [ Preview REST API ]
                                </div>
                            </div>
                            <div>
                                <h3 class="font-extrabold text-xs sm:text-sm text-slate-200 group-hover:text-cyan-300 transition">Mobile API Gateway</h3>
                                <p class="text-[10px] sm:text-[11px] text-slate-400 font-medium mt-1 leading-snug">
                                    Backend RESTful API dengan otentikasi JWT untuk aplikasi Android/iOS.
                                </p>
                            </div>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-[9px] bg-emerald-500/20 text-emerald-300 px-2 py-0.5 rounded font-black">REST API</span>
                                <span class="text-[9px] bg-purple-500/20 text-purple-300 px-2 py-0.5 rounded font-black">JWT</span>
                            </div>
                            <div class="flex gap-2 pt-1 text-xs">
                                <a href="#" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold px-3 py-1 rounded-lg text-[10px] transition">Demo Live</a>
                                <a href="#" class="glass-card hover:bg-slate-800 text-slate-200 font-bold px-3 py-1 rounded-lg text-[10px] transition">Source</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>

        <!-- ROW 3: EDUCATION & CERTIFICATIONS -->
        <section id="education" class="glass-card rounded-3xl p-5 sm:p-8 space-y-4 overflow-hidden">
            <div class="flex items-center justify-between">
                <h2 class="text-[10px] sm:text-xs font-black tracking-widest text-cyan-400 uppercase">EDUCATION & CERTIFICATIONS</h2>
                <span class="text-[9px] sm:text-[10px] text-slate-400 font-bold bg-white/5 px-2.5 py-1 rounded-full border border-white/10">
                    Swipe / Scroll ➔
                </span>
            </div>
            
            <div class="custom-scrollbar overflow-x-auto sm:overflow-y-auto sm:max-h-[220px] pb-3 sm:pb-0 pr-1 snap-x snap-mandatory">
                <div class="flex sm:grid sm:grid-cols-2 lg:grid-cols-3 gap-3 sm:gap-4 text-xs w-max sm:w-full">
                    
                    <!-- Item 1 -->
                    <div class="snap-start w-[220px] sm:w-auto bg-slate-900/50 border border-white/10 rounded-2xl p-3.5 sm:p-4 flex items-center gap-3 shrink-0 hover:border-cyan-500/50 transition">
                        <span class="text-xl sm:text-2xl">🎓</span>
                        <div>
                            <h3 class="font-extrabold text-xs sm:text-sm text-slate-200">Rekayasa Perangkat Lunak</h3>
                            <p class="text-[10px] sm:text-xs text-slate-400 font-medium">SMK Assalaam Bandung(2021 - 2023)</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="snap-start w-[220px] sm:w-auto bg-slate-900/50 border border-white/10 rounded-2xl p-3.5 sm:p-4 flex items-center gap-3 shrink-0 hover:border-cyan-500/50 transition">
                        <span class="text-xl sm:text-2xl">🎓</span>
                        <div>
                            <h3 class="font-extrabold text-xs sm:text-sm text-slate-200">S1 Rekayasa Perangkat Lunak</h3>
                            <p class="text-[10px] sm:text-xs text-slate-400 font-medium">Universitas Pendidikan Indonesia (2024 - Present)</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="snap-start w-[220px] sm:w-auto bg-slate-900/50 border border-white/10 rounded-2xl p-3.5 sm:p-4 flex items-center gap-3 shrink-0 hover:border-cyan-500/50 transition">
                        <span class="text-xl sm:text-2xl">⚡</span>
                        <div>
                            <h3 class="font-extrabold text-xs sm:text-sm text-slate-200">SNBP Terbaik SMK Assalaam</h3>
                            <p class="text-[10px] sm:text-xs text-slate-400 font-medium">Sertifikasi SNBP Terbaik (2024)</p>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="snap-start w-[220px] sm:w-auto bg-slate-900/50 border border-white/10 rounded-2xl p-3.5 sm:p-4 flex items-center gap-3 shrink-0 hover:border-cyan-500/50 transition">
                        <span class="text-xl sm:text-2xl">🌐</span>
                        <div>
                            <h3 class="font-extrabold text-xs sm:text-sm text-slate-200">Best Pemograman Web</h3>
                            <p class="text-[10px] sm:text-xs text-slate-400 font-medium">Sertifikasi Best Pemograman WEB (2026)</p>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="snap-start w-[220px] sm:w-auto bg-slate-900/50 border border-white/10 rounded-2xl p-3.5 sm:p-4 flex items-center gap-3 shrink-0 hover:border-cyan-500/50 transition">
                        <span class="text-xl sm:text-2xl">🗄️</span>
                        <div>
                            <h3 class="font-extrabold text-xs sm:text-sm text-slate-200">Ketua OSIS SMK Assalaam Bandung</h3>
                            <p class="text-[10px] sm:text-xs text-slate-400 font-medium">Sertifikasi Ketua OSIS (2022 - 2023)</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ROW 4: CONTACT FOOTER BAR -->
        <section id="contact" class="glass-card rounded-3xl p-5 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
            <div>
                <h2 class="text-[10px] sm:text-xs font-black tracking-widest text-cyan-400 uppercase">GET IN TOUCH</h2>
                <p class="text-slate-300 font-bold text-xs sm:text-sm mt-1">Siap untuk berkolaborasi? Hubungi saya kapan saja!</p>
            </div>
            
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs w-full md:w-auto">
                <a href="https://wa.me/083844619720" target="_blank" rel="noopener noreferrer" class="flex-1 sm:flex-none justify-center bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-md">
                    💬 WhatsApp
                </a>
                <a href="mailto:ikbalmiftahudin15@upi.edu" class="flex-1 sm:flex-none justify-center bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-md">
                    ✉️ Email
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="flex-1 sm:flex-none justify-center bg-indigo-600 hover:bg-indigo-500 text-white font-bold px-4 py-2.5 rounded-xl transition flex items-center gap-1.5 shadow-md">
                    💼 LinkedIn
                </a>
            </div>
        </section>

    </main>

    <footer class="text-center text-slate-500 text-[10px] sm:text-xs mt-8 sm:mt-12 font-bold px-4">
        © 2026 Ikbal Miftahudin. Built with Laravel & Tailwind CSS.
    </footer>
</body>
</html>