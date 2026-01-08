<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JTech Framework</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            900: '#0c4a6e',
                        },
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': {
                                transform: 'translateY(0)'
                            },
                            '50%': {
                                transform: 'translateY(-20px)'
                            },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        .bg-grid {
            background-image: linear-gradient(to right, #1e293b 1px, transparent 1px),
                linear-gradient(to bottom, #1e293b 1px, transparent 1px);
            background-size: 40px 40px;
            mask-image: radial-gradient(circle at center, black, transparent 80%);
            -webkit-mask-image: radial-gradient(circle at center, black, transparent 80%);
        }
    </style>
</head>

<body class="antialiased selection:bg-brand-500 selection:text-white">

    <div class="fixed inset-0 bg-grid opacity-20 pointer-events-none z-0"></div>

    <div class="relative z-10 min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8">

        <div class="mb-8 animate-float">
            <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-brand-400 to-purple-600 rounded-lg blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200"></div>
                <div class="relative px-7 py-4 bg-dark-800 ring-1 ring-white/10 rounded-lg leading-none flex items-top justify-start space-x-6">
                    <span class="text-4xl font-black tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-purple-500">
                        JTech<span class="text-white">Framework</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight mb-6">
                Build something <span class="text-brand-400">extraordinary</span>.
            </h1>
            <p class="text-lg md:text-xl text-slate-400 mb-10 leading-relaxed">
                A lightweight, robust, and modern PHP framework designed for speed and simplicity.
                Start your journey with a powerful container, elegant routing, and blazing fast performance.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <a href="https://github.com/jauharimtikhan/jtech" target="_blank" class="px-8 py-3 rounded-full bg-brand-600 hover:bg-brand-500 text-white font-semibold transition shadow-[0_0_20px_rgba(14,165,233,0.3)] hover:shadow-[0_0_30px_rgba(14,165,233,0.5)]">
                    Documentation
                </a>
                <a href="https://github.com/jauharimtikhan/jtech" target="_blank" class="px-8 py-3 rounded-full bg-dark-800 hover:bg-dark-700 text-slate-300 font-semibold border border-slate-700 transition">
                    Visit GitHub
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto w-full">

            <div class="p-6 rounded-2xl bg-dark-800/50 border border-slate-700/50 backdrop-blur-sm hover:border-brand-500/50 transition duration-300">
                <div class="w-10 h-10 mb-4 rounded-lg bg-brand-500/10 flex items-center justify-center text-brand-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Blazing Fast</h3>
                <p class="text-sm text-slate-400">Optimized core with minimal overhead, ensuring your application runs at lightning speed.</p>
            </div>

            <div class="p-6 rounded-2xl bg-dark-800/50 border border-slate-700/50 backdrop-blur-sm hover:border-brand-500/50 transition duration-300">
                <div class="w-10 h-10 mb-4 rounded-lg bg-purple-500/10 flex items-center justify-center text-purple-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Service Container</h3>
                <p class="text-sm text-slate-400">Powerful dependency injection container to manage class dependencies and perform dependency injection.</p>
            </div>

            <div class="p-6 rounded-2xl bg-dark-800/50 border border-slate-700/50 backdrop-blur-sm hover:border-brand-500/50 transition duration-300">
                <div class="w-10 h-10 mb-4 rounded-lg bg-emerald-500/10 flex items-center justify-center text-emerald-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Database ORM</h3>
                <p class="text-sm text-slate-400">Integrated with Eloquent ORM for expressive and elegant database interactions.</p>
            </div>

            <div class="p-6 rounded-2xl bg-dark-800/50 border border-slate-700/50 backdrop-blur-sm hover:border-brand-500/50 transition duration-300">
                <div class="w-10 h-10 mb-4 rounded-lg bg-pink-500/10 flex items-center justify-center text-pink-400">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-2">Modern Routing</h3>
                <p class="text-sm text-slate-400">Expressive routing syntax with middleware support, route parameters, and named routes.</p>
            </div>
        </div>

        <div class="mt-16 text-slate-500 text-sm flex items-center space-x-4">
            <span class="flex items-center">
                <span class="w-2 h-2 rounded-full bg-green-500 mr-2"></span>
                PHP v<?= phpversion() ?>
            </span>
            <span>&bull;</span>
            <span>JTech v{{app_Version()}}</span>
            <span>&bull;</span>
            <span>Environment: <?= env('APP_ENV', 'production') ?></span>
        </div>
    </div>

</body>

</html>