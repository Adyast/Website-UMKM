<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login - Nocturne Brew Co.</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#D4A373", // Golden Coffee color
                        "background-light": "#FAF9F6", // Off-white/Cream
                        "background-dark": "#0F0F0F", // Deep Black/Charcoal
                        "card-dark": "#1E1E1E",
                        "card-light": "#FFFFFF",
                        "surface-dark": "#181818",
                        "surface-light": "#F0EFEB"
                    },
                    fontFamily: {
                        display: ["Playfair Display", "serif"],
                        body: ["Inter", "sans-serif"],
                    },
                    borderRadius: {
                        DEFAULT: "1rem", 
                        '2xl': "1.25rem",
                        '3xl': "1.5rem",
                    },
                },
            },
        };
    </script>
<style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-background-dark text-gray-200 font-body antialiased selection:bg-primary selection:text-white flex flex-col min-h-screen relative overflow-hidden">
<div class="fixed inset-0 z-0 pointer-events-none">
<img alt="Atmospheric Texture" class="w-full h-full object-cover opacity-20 filter blur-sm scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQzn5NJuLhYn4iyN_Df1961tTVA4RuZeyBO5r9vPJqfiTmh1BENZ7GD3uKvOWQtmJ35ajS9M6wyUC1It_sO36avQqpvSYeIWN8JH8QvQ1NdiWDlMhhw79-Of8g5C2IyCfJUynNZQCNTWCTISR87PEidBMZqFcGS4ge5Jr8mcAA4ALvuXvjnkItIBtVFWZI-qLn7knEXMZp6SDUiV8oOptVXnDUOE70Vf39SkXCwyf_RhBNYMxPvQwJsGbvHPEfdkZ27PfayvLQ-VA"/>
<div class="absolute inset-0 bg-gradient-to-b from-background-dark/90 via-background-dark/80 to-background-dark"></div>
</div>
<main class="relative z-10 flex-grow flex items-center justify-center px-4 py-12">
<div class="w-full max-w-md">
<div class="bg-surface-dark border border-gray-800/50 rounded-3xl p-8 sm:p-12 shadow-2xl shadow-black ring-1 ring-white/5 backdrop-blur-md">
<div class="flex flex-col items-center mb-10 text-center">
<div class="flex items-center gap-2 mb-6">
<span class="material-icons-round text-primary text-4xl">coffee</span>
<span class="font-display font-bold text-2xl text-white tracking-tight">Nocturne<span class="text-primary">.</span></span>
</div>
<h1 class="font-display text-3xl font-semibold text-white mb-2">Admin Login</h1>
<p class="text-gray-500 text-sm font-light">Secure access for management staff</p>
</div>
<form action="#" class="space-y-6" method="POST">
<div class="space-y-1">
<label class="block text-sm font-medium text-gray-400 pl-1" for="identity">Username or Email</label>
<div class="relative group">
<span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500 group-focus-within:text-primary transition-colors">
<span class="material-icons-round text-xl">person_outline</span>
</span>
<input class="block w-full pl-12 pr-4 py-3.5 bg-black/40 border border-gray-700 rounded-2xl text-gray-200 placeholder-gray-600 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all text-sm" id="identity" name="identity" placeholder="Enter your username" type="text"/>
</div>
</div>
<div class="space-y-1">
<div class="flex items-center justify-between pl-1">
<label class="block text-sm font-medium text-gray-400" for="password">Password</label>
</div>
<div class="relative group">
<span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-gray-500 group-focus-within:text-primary transition-colors">
<span class="material-icons-round text-xl">lock_outline</span>
</span>
<input class="block w-full pl-12 pr-4 py-3.5 bg-black/40 border border-gray-700 rounded-2xl text-gray-200 placeholder-gray-600 focus:outline-none focus:ring-1 focus:ring-primary focus:border-primary transition-all text-sm" id="password" name="password" placeholder="Enter your password" type="password"/>
</div>
</div>
<button class="w-full flex justify-center py-3.5 px-4 border border-transparent rounded-2xl shadow-lg shadow-primary/10 text-sm font-bold tracking-wide uppercase text-white bg-primary hover:bg-[#c69060] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary focus:ring-offset-surface-dark transition-all transform hover:scale-[1.02] mt-8" type="submit">
                        Log In
                    </button>
</form>
<div class="mt-8 pt-6 border-t border-gray-800/50 text-center">
<a class="inline-flex items-center gap-2 text-sm text-gray-500 hover:text-primary transition-colors group" href="../index.html">
<span class="material-icons-round text-sm group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        Return to Home
                    </a>
</div>
</div>
</div>
</main>
<footer class="relative z-10 w-full border-t border-gray-900 bg-black/40 backdrop-blur-sm">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
<div class="flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-xs text-gray-600 font-light">
                    © 2023 Nocturne Brew Co. All rights reserved.
                </p>
<div class="flex gap-6 text-xs text-gray-600">
<a class="hover:text-primary transition-colors" href="#">Privacy</a>
<a class="hover:text-primary transition-colors" href="#">Support</a>
</div>
</div>
</div>
</footer>

</body></html>