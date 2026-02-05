<?php
?>
<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Nocturne Brew - Cafe Overview</title>
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
                        DEFAULT: "1rem", // Rounded corners like the screenshot
                        '2xl': "1.25rem",
                        '3xl': "1.5rem",
                    },
                },
            },
        };
    </script>
<style>.hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-body transition-colors duration-300 antialiased selection:bg-primary selection:text-white">
<nav class="fixed top-0 w-full z-50 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 transition-all duration-300">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-20">
<div class="flex-shrink-0 flex items-center gap-2">
<span class="material-icons-round text-primary text-3xl">coffee</span>
<span class="font-display font-bold text-2xl text-gray-900 dark:text-white tracking-tight">Nocturne<span class="text-primary">.</span></span>
</div>
<div class="hidden md:block">
<div class="ml-10 flex items-baseline space-x-8">
<a class="text-gray-900 dark:text-white hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors" href="#">Home</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors" href="about.php">Tentang Kami</a>
<a class="text-gray-600 dark:text-gray-400 hover:text-primary dark:hover:text-primary px-3 py-2 rounded-md text-sm font-medium transition-colors" href="location.php">Lokasi Kami</a>
</div>
</div>
<div class="hidden md:flex items-center gap-4">
<a class="bg-gray-900 dark:bg-white text-white dark:text-gray-900 px-5 py-2 rounded-full text-sm font-medium hover:bg-primary dark:hover:bg-primary hover:text-white dark:hover:text-white transition-all shadow-lg hover:shadow-primary/25" href="admin/login.php">
                        Login Admin
                    </a>
<button class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-800 transition-colors" onclick="document.documentElement.classList.toggle('dark')">
<span class="material-icons-round text-gray-600 dark:text-gray-400">brightness_4</span>
</button>
</div>
<div class="-mr-2 flex md:hidden">
<button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none" type="button">
<span class="material-icons-round">menu</span>
</button>
</div>
</div>
</div>
</nav>
<main class="pt-24 pb-12">
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 mt-8">
<div class="relative rounded-3xl overflow-hidden h-[400px] md:h-[500px]">
<img alt="Abstract dark cafe atmosphere" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQzn5NJuLhYn4iyN_Df1961tTVA4RuZeyBO5r9vPJqfiTmh1BENZ7GD3uKvOWQtmJ35ajS9M6wyUC1It_sO36avQqpvSYeIWN8JH8QvQ1NdiWDlMhhw79-Of8g5C2IyCfJUynNZQCNTWCTISR87PEidBMZqFcGS4ge5Jr8mcAA4ALvuXvjnkItIBtVFWZI-qLn7knEXMZp6SDUiV8oOptVXnDUOE70Vf39SkXCwyf_RhBNYMxPvQwJsGbvHPEfdkZ27PfayvLQ-VA"/>
<div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>
<div class="relative z-10 flex flex-col justify-center h-full px-8 md:px-16 max-w-2xl">
<span class="text-primary font-medium tracking-wider uppercase text-sm mb-2">Welcome Back</span>
<h1 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 leading-tight">
                        Find clarity in <br/><span class="text-primary italic">every cup.</span>
</h1>
<p class="text-gray-300 text-lg md:text-xl font-light mb-4 max-w-md">
                        A sanctuary for thinkers, dreamers, and night owls. Experience coffee brewed with precision in an atmosphere designed for focus.
                    </p>
<div class="mb-8 max-w-md">
<p class="text-sm text-gray-300/80 bg-black/40 backdrop-blur-sm p-3 rounded-lg border-l-2 border-primary">
        Note: This is an informational menu. Orders are taken exclusively on-site at our physical locations.
    </p>
</div>
<div class="flex gap-4">
<a class="bg-primary text-white px-8 py-3 rounded-full font-medium hover:bg-white hover:text-black transition-all shadow-lg shadow-primary/20 text-center" href="#menu">
                            View Menu
                        </a>
</div>
</div>
</div>
</section>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20" id="menu">
<div class="flex items-center justify-between mb-6">
<h2 class="text-2xl font-display font-semibold text-gray-900 dark:text-white">Signature Selections</h2>
<div class="flex gap-2">
<button class="p-2 rounded-full border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
<span class="material-icons-round text-sm">arrow_back</span>
</button>
<button class="p-2 rounded-full border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
<span class="material-icons-round text-sm">arrow_forward</span>
</button>
</div>
</div>
<div class="flex overflow-x-auto gap-6 pb-8 hide-scrollbar snap-x">
<div class="min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl">
<img alt="Espresso" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4l5C3BaCe-ocqKAsWJS4l7ysMTFXupR775YyPz8RIxSvfO3qKi8VfXWplGzjD0UH3DwuWg5dBBpPr2RAS0sP2xvyA-IxWI5lJx-fwE5BbpMHHIqH8_9_cUDliGaVQqJD4SjyALBFJSQYIW07XdXhuERiAop232YFBKcpGJNXpWQs7fDTLBXsSfNJ6a6YN6R22dpe7Z4G_mx2pyGclKe_-yJ3DVt5G3KV09WsTTouyEMg-3k9jvEjncHyuVNHVJJoaNpphqxGL4Xk"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute top-4 right-4 z-20 opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-icons-round text-white/80 hover:text-white">more_vert</span>
</div>
<div class="absolute bottom-0 w-full p-5 z-10">
<h3 class="text-white font-display font-bold text-xl mb-1">Midnight Espresso</h3>
<p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">
                            Intense dark roast with notes of cocoa and dried fruit. A pure shot of energy.
                        </p>
<div class="flex justify-between items-end border-t border-white/20 pt-3">
<span class="text-primary font-bold">Rp 52.000</span>
</div>
</div>
</div>
<div class="min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl">
<img alt="Latte Art" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzFW9tmaUtOdEGUtlSzzdsOs8JsI0q8UHQ3mmzJh5ten5x29Df-rzzFO8qPcybIlqOFTxtORo9-Tl6qYgS4-cjwuLf2TmJZEED50WmFX0CbRdy5cRxxAydcEB-W8FZnpESzTpg51qle5s_Fthp7GM2djjY8hj5jD3D5dsPNfqnghDQT-6gVQGhx27eFbYzIDO9MJmfVcUoBk2UM9Z_SH1nfv_CpvXm8MdOF5j0WAk0j2jRzXI5hEpuQbkbS7pnqFAsNoKoemrnbTY"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute top-4 right-4 z-20 opacity-0 group-hover:opacity-100 transition-opacity">
<span class="material-icons-round text-white/80 hover:text-white">more_vert</span>
</div>
<div class="absolute bottom-0 w-full p-5 z-10">
<h3 class="text-white font-display font-bold text-xl mb-1">Velvet Latte</h3>
<p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">
                            Steamed milk poured over rich espresso. Smooth, creamy, and comforting.
                        </p>
<div class="flex justify-between items-end border-t border-white/20 pt-3">
<span class="text-primary font-bold">Rp 72.000</span>
</div>
</div>
</div>
<div class="min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl">
<img alt="Pastry" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBY8A4pZTRpUvowFW7ZAPdALPZaoyi227yAnuLaepBLDbsg6D_vJiptJEWBlsvHZpWeMh7bKENYG83W2e5CBDhll33uTU-DmVm_QhTMIPXLWAEcob_OhB-D2ahRextg3N13y3NHjrQC70bbHUIzLaUi0Q_UFVGmmS2CuDzp2tYM9dsHiEiKOnbEkUGbHygKdErLXiqXoWhVUrkIBv0JTI2_B6YK78N2FGtNmA_ZHyJN3huPeOtjk8HEPyXu6GrFS20DdowOaE2Nv6s"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute bottom-0 w-full p-5 z-10">
<h3 class="text-white font-display font-bold text-xl mb-1">Butter Croissant</h3>
<p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">
                            Flaky, golden layers baked fresh every morning. The perfect companion.
                        </p>
<div class="flex justify-between items-end border-t border-white/20 pt-3">
<span class="text-primary font-bold">Rp 48.000</span>
</div>
</div>
</div>
<div class="min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl">
<img alt="Matcha" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5F4Dtbs9YMIOLyDzuA2ArdQPEH9HTnegl58t_i2GHN4ShVyz6H9Vq6FSastHs59yY2rU3GJboirqj5YKh2kTY-5TfMq1K50vMntCxFEVlPunCA0uysMMRWYSglQftgNLlI9ZG4emLF_i_KWEbaxglh-m7KbfBqXURPwDc1FTcRLdZw5PUKR42WtnWnKQPEPBXVqlGhuGWEp3WcjMxCZYnSqYZwZZb4jRucubm0LI9DoWV71bMmQcepuDpyJp4hdFVh0mWeUKOhRo"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute bottom-0 w-full p-5 z-10">
<h3 class="text-white font-display font-bold text-xl mb-1">Kyoto Matcha</h3>
<p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">
                            Ceremonial grade green tea with a hint of vanilla bean. Earthy and sweet.
                        </p>
<div class="flex justify-between items-end border-t border-white/20 pt-3">
<span class="text-primary font-bold">Rp 82.000</span>
</div>
</div>
</div>
<div class="min-w-[280px] w-[280px] h-[340px] relative rounded-2xl overflow-hidden group cursor-pointer snap-start shadow-xl">
<img alt="Pour Over" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeOAnTALnPxIMwrwXl29RgBxSvQLfi3E-M2aOMgGyM3GX7lNfQj_smKFMnr3kqukMR6GKJRVmndFXDPTHibry92Wqy60ql2kjsuX9et8GkEREz80GbGQhY2Y2duyb8l4NAuE59uJDJjt836yihuIXkEFxECCHsO9xf2r133sru3Zf7gKUXB8OlM0PvdybpI3udUXGlS2nNhWsyAsHVMl6GWZfeX8d-u5j3hPfBayC0L_iDWyohjUYASx4c3DVkqlyYGa9umKHwCT4"/>
<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent"></div>
<div class="absolute bottom-0 w-full p-5 z-10">
<h3 class="text-white font-display font-bold text-xl mb-1">V60 Pour Over</h3>
<p class="text-gray-300 text-xs line-clamp-2 mb-3 font-light">
                            Hand-poured single origin beans. Experience the delicate notes of Ethiopia.
                        </p>
<div class="flex justify-between items-end border-t border-white/20 pt-3">
<span class="text-primary font-bold">Rp 90.000</span>
</div>
</div>
</div>
</div>
</section>
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-20" id="about">
<div class="bg-surface-light dark:bg-surface-dark rounded-3xl p-8 md:p-12 flex flex-col md:flex-row gap-10 items-center shadow-lg border border-gray-200 dark:border-gray-800">
<div class="w-full md:w-1/2">
<div class="relative h-64 md:h-80 w-full rounded-2xl overflow-hidden">
<img alt="Barista working" class="absolute inset-0 w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-500" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-vkA0WpH7hyMoy2I0Cijdq8ziNg74aEC_gfrC7FX4XXj2zXdxuTGCCEx7jFrdeN5MErIFHAcbmioHblEz9KHOnbEiLYjETKUgwrlWQYG8GfragckUcW5v5OCf7zkYb_jZQyJQ5N_7T59K6JDAh0OLUVV2c27TvYc3pTexz3QAmCSELPuYLPc6WmdLxMlaC8-qP2uS9BdBJ-6Fas7zFxYQFwfsCo7P1V-f67bHgLEZ2TBJYnxRJoykkGYhMZFj_zXTO0qW5OUJdtE"/>
<div class="absolute inset-0 bg-primary/10 mix-blend-overlay"></div>
</div>
</div>
<div class="w-full md:w-1/2">
<span class="text-primary font-bold tracking-widest text-xs uppercase mb-2 block">Our Philosophy</span>
<h2 class="text-3xl md:text-4xl font-display font-bold text-gray-900 dark:text-white mb-4">
                        Crafting moments of <br class="hidden md:block"/> quiet inspiration.
                    </h2>
<p class="text-gray-600 dark:text-gray-400 mb-6 leading-relaxed">
                        Nocturne Brew was born from a love of late nights and early mornings. We believe a coffee shop should be more than a place to get caffeine—it should be a canvas for your thoughts. 
                    </p>
<div class="flex flex-col sm:flex-row gap-4 text-sm text-gray-500 dark:text-gray-500 mb-8">
<div class="flex items-center gap-2">
<span class="material-icons-round text-primary text-sm">verified</span>
<span>Ethically Sourced Beans</span>
</div>
<div class="flex items-center gap-2">
<span class="material-icons-round text-primary text-sm">wifi</span>
<span>High-Speed Workspace</span>
</div>
</div>
<a class="inline-flex items-center gap-2 text-primary font-medium hover:text-white hover:bg-primary px-4 py-2 rounded-lg transition-all border border-primary/20 hover:border-primary" href="#">
                        Read Our Full Story
                        <span class="material-icons-round text-sm">arrow_forward</span>
</a>
</div>
</div>
</section>
</main>
<footer class="bg-gray-100 dark:bg-[#050505] border-t border-gray-200 dark:border-gray-900 pt-16 pb-8" id="locations">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
<div>
<div class="flex items-center gap-2 mb-6">
<span class="material-icons-round text-primary text-2xl">coffee</span>
<span class="font-display font-bold text-xl text-gray-900 dark:text-white">Nocturne.</span>
</div>
<p class="text-gray-600 dark:text-gray-500 mb-6 max-w-sm">
                        A space for the thoughtful. Visit us to experience the perfect blend of ambiance and aroma.
                    </p>
<div class="space-y-4">
<div class="flex items-start gap-3">
<span class="material-icons-round text-primary mt-1 text-sm">location_on</span>
<span class="text-gray-600 dark:text-gray-400 text-sm">
                                124 Silence Blvd, Arts District<br/>
                                New York, NY 10012
                            </span>
</div>
<div class="flex items-center gap-3">
<span class="material-icons-round text-primary text-sm">email</span>
<span class="text-gray-600 dark:text-gray-400 text-sm">hello@nocturnebrew.com</span>
</div>
</div>
<div class="flex gap-4 mt-8">
<a class="w-10 h-10 rounded-full bg-gray-200 dark:bg-surface-dark flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:text-white transition-all" href="#">
<i class="fa-brands fa-instagram">Ig</i>
</a>
<a class="w-10 h-10 rounded-full bg-gray-200 dark:bg-surface-dark flex items-center justify-center text-gray-600 dark:text-gray-400 hover:bg-primary hover:text-white dark:hover:bg-primary dark:hover:text-white transition-all" href="#">
<i class="fa-brands fa-whatsapp">Wa</i>
</a>
</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
<div>
<h4 class="font-bold text-gray-900 dark:text-white mb-4 uppercase text-sm tracking-wider">Operating Hours</h4>
<ul class="space-y-2 text-sm text-gray-600 dark:text-gray-400">
<li class="flex justify-between">
<span>Sen - Jum</span>
<span class="text-gray-900 dark:text-gray-200 font-medium">18.00 - 23.00</span>
</li>
<li class="flex justify-between">
<span>Sabtu</span>
<span class="text-gray-900 dark:text-gray-200 font-medium">16.00 - 23.00</span>
</li>
<li class="flex justify-between">
<span>Minggu</span>
<span class="text-gray-900 dark:text-gray-200 font-medium">16.00 - 24.00</span>
</li>
</ul>
<div class="mt-6">
<a class="inline-flex items-center gap-2 text-primary font-medium hover:text-white hover:bg-primary px-4 py-2 rounded-lg transition-all border border-primary/20 hover:border-primary text-sm w-full justify-center sm:w-auto" href="location.php">
        Lokasi Kami
        <span class="material-icons-round text-sm">map</span>
</a>
</div>
</div>
<div>
<h4 class="font-bold text-gray-900 dark:text-white mb-4 uppercase text-sm tracking-wider">Explore</h4>
<ul class="space-y-2 text-sm">
<li><a class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors" href="#">Our Menu</a></li>
<li><a class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors" href="#">Reservations</a></li>
<li><a class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors" href="#">Gift Cards</a></li>
<li><a class="text-gray-600 dark:text-gray-400 hover:text-primary transition-colors" href="#">Careers</a></li>
</ul>
</div>
</div>
</div>
<div class="border-t border-gray-200 dark:border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
<p class="text-xs text-gray-500 dark:text-gray-600">
                    © 2023 Nocturne Brew Co. All rights reserved.
                </p>
<div class="flex gap-6 text-xs text-gray-500 dark:text-gray-600">
</div>
</div>
</div>
</footer>
</body></html>