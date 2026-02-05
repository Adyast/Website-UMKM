<!DOCTYPE html>
<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Dashboard - Menu Management</title>
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
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200 font-body transition-colors duration-300 antialiased selection:bg-primary selection:text-white h-screen overflow-hidden">
<div class="flex h-full w-full">
<main class="flex-1 flex flex-col min-w-0 overflow-hidden relative">
<div class="flex-1 overflow-y-auto p-6 lg:p-10 scroll-smooth">
<div class="max-w-7xl mx-auto">
<div class="flex items-center justify-between mb-4">
<div class="flex items-center gap-2 text-primary/80">
<span class="material-icons-round text-2xl">coffee</span>
<span class="font-display font-bold text-xl text-white tracking-tight">Nocturne<span class="text-primary">.</span></span>
</div>
</div>
<header class="flex flex-col sm:flex-row justify-between items-start mb-10 gap-6 border-b border-gray-800/50 pb-8">
<div>
<h1 class="font-display text-3xl lg:text-4xl font-bold text-white mb-2">Menu Management</h1>
<p class="text-primary font-medium text-sm mb-3">Welcome, Admin</p>
<p class="text-gray-400 font-light max-w-2xl">Create, update, or remove items from your digital menu.</p>
</div>
<div class="flex items-center pt-2 sm:pt-0">
<a class="flex items-center gap-2 px-4 py-2 text-gray-400 hover:text-white bg-card-dark border border-gray-800 hover:border-gray-600 rounded-lg transition-all group" href="#">
<span class="material-icons-round group-hover:text-primary transition-colors">logout</span>
<span class="font-medium">Logout</span>
</a>
</div>
</header>
<div class="grid grid-cols-1 xl:grid-cols-12 gap-8 items-start">
<div class="xl:col-span-4 sticky top-0">
<div class="bg-card-dark rounded-3xl p-6 lg:p-8 shadow-xl border border-gray-800">
<div class="flex items-center gap-2 mb-6 border-b border-gray-700/50 pb-4">
<span class="material-icons-round text-primary">add_circle</span>
<h2 class="font-display text-xl font-semibold text-white">Add New Item</h2>
</div>
<form class="space-y-5">
<div class="space-y-2">
<label class="text-xs font-medium text-gray-400 uppercase tracking-wider ml-1">Product Image</label>
<div class="border-2 border-dashed border-gray-700 rounded-2xl h-32 flex flex-col items-center justify-center text-center cursor-pointer hover:border-primary/50 hover:bg-surface-dark transition-all group">
<span class="material-icons-round text-gray-500 text-3xl mb-1 group-hover:text-primary transition-colors">cloud_upload</span>
<span class="text-xs text-gray-500 group-hover:text-gray-300">Drop image here or click to browse</span>
</div>
</div>
<div class="space-y-2">
<label class="text-xs font-medium text-gray-400 uppercase tracking-wider ml-1">Item Title</label>
<input class="w-full bg-surface-dark border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:ring-1 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="e.g. Midnight Espresso" type="text"/>
</div>
<div class="space-y-2">
<label class="text-xs font-medium text-gray-400 uppercase tracking-wider ml-1">Price (Rp)</label>
<div class="relative">
<span class="absolute left-4 top-3 text-gray-500 text-sm">Rp</span>
<input class="w-full bg-surface-dark border border-gray-700 rounded-xl pl-10 pr-4 py-3 text-white placeholder-gray-600 focus:ring-1 focus:ring-primary focus:border-primary transition-all outline-none" placeholder="0" type="number"/>
</div>
</div>
<div class="space-y-2">
<label class="text-xs font-medium text-gray-400 uppercase tracking-wider ml-1">Description</label>
<textarea class="w-full bg-surface-dark border border-gray-700 rounded-xl px-4 py-3 text-white placeholder-gray-600 focus:ring-1 focus:ring-primary focus:border-primary transition-all outline-none resize-none" placeholder="Enter ingredients and details..." rows="3"></textarea>
</div>
<button class="w-full bg-primary text-white font-medium py-3.5 rounded-xl mt-4 hover:bg-white hover:text-black transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2" type="button">
<span>Save to Menu</span>
<span class="material-icons-round text-sm">arrow_forward</span>
</button>
</form>
</div>
</div>
<div class="xl:col-span-8">
<div class="bg-card-dark rounded-3xl border border-gray-800 shadow-xl overflow-hidden flex flex-col h-full">
<div class="p-6 lg:p-8 border-b border-gray-700/50 flex flex-col sm:flex-row justify-between items-center gap-4">
<h2 class="font-display text-xl font-semibold text-white">Existing Menu Items</h2>
<div class="relative w-full sm:w-auto">
<span class="material-icons-round absolute left-3 top-2.5 text-gray-500 text-sm">search</span>
<input class="w-full sm:w-64 bg-surface-dark border border-gray-700 rounded-full py-2 pl-9 pr-4 text-sm text-white focus:outline-none focus:border-primary transition-colors" placeholder="Search items..." type="text"/>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead class="bg-surface-dark text-gray-400 text-xs uppercase font-medium tracking-wider">
<tr>
<th class="px-6 py-4 rounded-tl-lg">Product</th>
<th class="px-6 py-4 hidden sm:table-cell">Description</th>
<th class="px-6 py-4">Price</th>
<th class="px-6 py-4 text-right rounded-tr-lg">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-800">
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img alt="Espresso" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4l5C3BaCe-ocqKAsWJS4l7ysMTFXupR775YyPz8RIxSvfO3qKi8VfXWplGzjD0UH3DwuWg5dBBpPr2RAS0sP2xvyA-IxWI5lJx-fwE5BbpMHHIqH8_9_cUDliGaVQqJD4SjyALBFJSQYIW07XdXhuERiAop232YFBKcpGJNXpWQs7fDTLBXsSfNJ6a6YN6R22dpe7Z4G_mx2pyGclKe_-yJ3DVt5G3KV09WsTTouyEMg-3k9jvEjncHyuVNHVJJoaNpphqxGL4Xk"/>
<div>
<div class="text-white font-medium">Midnight Espresso</div>
<div class="text-gray-500 text-xs sm:hidden">Dark Roast</div>
</div>
</div>
</td>
<td class="px-6 py-4 max-w-xs hidden sm:table-cell">
<p class="text-gray-400 text-sm truncate">Intense dark roast with notes of cocoa and dried fruit.</p>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="text-primary font-medium">Rp 55.000</span>
</td>
<td class="px-6 py-4 text-right whitespace-nowrap">
<div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
<span class="material-icons-round text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Delete">
<span class="material-icons-round text-lg">delete_outline</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img alt="Latte" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAzFW9tmaUtOdEGUtlSzzdsOs8JsI0q8UHQ3mmzJh5ten5x29Df-rzzFO8qPcybIlqOFTxtORo9-Tl6qYgS4-cjwuLf2TmJZEED50WmFX0CbRdy5cRxxAydcEB-W8FZnpESzTpg51qle5s_Fthp7GM2djjY8hj5jD3D5dsPNfqnghDQT-6gVQGhx27eFbYzIDO9MJmfVcUoBk2UM9Z_SH1nfv_CpvXm8MdOF5j0WAk0j2jRzXI5hEpuQbkbS7pnqFAsNoKoemrnbTY"/>
<div>
<div class="text-white font-medium">Velvet Latte</div>
<div class="text-gray-500 text-xs sm:hidden">Steamed Milk</div>
</div>
</div>
</td>
<td class="px-6 py-4 max-w-xs hidden sm:table-cell">
<p class="text-gray-400 text-sm truncate">Steamed milk poured over rich espresso. Smooth.</p>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="text-primary font-medium">Rp 72.000</span>
</td>
<td class="px-6 py-4 text-right whitespace-nowrap">
<div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
<span class="material-icons-round text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Delete">
<span class="material-icons-round text-lg">delete_outline</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img alt="Croissant" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBY8A4pZTRpUvowFW7ZAPdALPZaoyi227yAnuLaepBLDbsg6D_vJiptJEWBlsvHZpWeMh7bKENYG83W2e5CBDhll33uTU-DmVm_QhTMIPXLWAEcob_OhB-D2ahRextg3N13y3NHjrQC70bbHUIzLaUi0Q_UFVGmmS2CuDzp2tYM9dsHiEiKOnbEkUGbHygKdErLXiqXoWhVUrkIBv0JTI2_B6YK78N2FGtNmA_ZHyJN3huPeOtjk8HEPyXu6GrFS20DdowOaE2Nv6s"/>
<div>
<div class="text-white font-medium">Butter Croissant</div>
<div class="text-gray-500 text-xs sm:hidden">Bakery</div>
</div>
</div>
</td>
<td class="px-6 py-4 max-w-xs hidden sm:table-cell">
<p class="text-gray-400 text-sm truncate">Flaky, golden layers baked fresh every morning.</p>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="text-primary font-medium">Rp 48.000</span>
</td>
<td class="px-6 py-4 text-right whitespace-nowrap">
<div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
<span class="material-icons-round text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Delete">
<span class="material-icons-round text-lg">delete_outline</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img alt="Matcha" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC5F4Dtbs9YMIOLyDzuA2ArdQPEH9HTnegl58t_i2GHN4ShVyz6H9Vq6FSastHs59yY2rU3GJboirqj5YKh2kTY-5TfMq1K50vMntCxFEVlPunCA0uysMMRWYSglQftgNLlI9ZG4emLF_i_KWEbaxglh-m7KbfBqXURPwDc1FTcRLdZw5PUKR42WtnWnKQPEPBXVqlGhuGWEp3WcjMxCZYnSqYZwZZb4jRucubm0LI9DoWV71bMmQcepuDpyJp4hdFVh0mWeUKOhRo"/>
<div>
<div class="text-white font-medium">Kyoto Matcha</div>
<div class="text-gray-500 text-xs sm:hidden">Green Tea</div>
</div>
</div>
</td>
<td class="px-6 py-4 max-w-xs hidden sm:table-cell">
<p class="text-gray-400 text-sm truncate">Ceremonial grade green tea with a hint of vanilla bean.</p>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="text-primary font-medium">Rp 85.000</span>
</td>
<td class="px-6 py-4 text-right whitespace-nowrap">
<div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
<span class="material-icons-round text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Delete">
<span class="material-icons-round text-lg">delete_outline</span>
</button>
</div>
</td>
</tr>
<tr class="hover:bg-white/5 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-4">
<img alt="Pour Over" class="w-12 h-12 rounded-lg object-cover ring-1 ring-gray-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeOAnTALnPxIMwrwXl29RgBxSvQLfi3E-M2aOMgGyM3GX7lNfQj_smKFMnr3kqukMR6GKJRVmndFXDPTHibry92Wqy60ql2kjsuX9et8GkEREz80GbGQhY2Y2duyb8l4NAuE59uJDJjt836yihuIXkEFxECCHsO9xf2r133sru3Zf7gKUXB8OlM0PvdybpI3udUXGlS2nNhWsyAsHVMl6GWZfeX8d-u5j3hPfBayC0L_iDWyohjUYASx4c3DVkqlyYGa9umKHwCT4"/>
<div>
<div class="text-white font-medium">V60 Pour Over</div>
<div class="text-gray-500 text-xs sm:hidden">Filter Coffee</div>
</div>
</div>
</td>
<td class="px-6 py-4 max-w-xs hidden sm:table-cell">
<p class="text-gray-400 text-sm truncate">Hand-poured single origin beans. Ethiopia.</p>
</td>
<td class="px-6 py-4 whitespace-nowrap">
<span class="text-primary font-medium">Rp 90.000</span>
</td>
<td class="px-6 py-4 text-right whitespace-nowrap">
<div class="flex justify-end gap-2 opacity-60 group-hover:opacity-100 transition-opacity">
<button class="p-2 text-gray-400 hover:text-white hover:bg-gray-700 rounded-lg transition-colors" title="Edit">
<span class="material-icons-round text-lg">edit</span>
</button>
<button class="p-2 text-gray-400 hover:text-red-400 hover:bg-red-400/10 rounded-lg transition-colors" title="Delete">
<span class="material-icons-round text-lg">delete_outline</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 border-t border-gray-700/50 bg-surface-dark/50 flex justify-center items-center">
<div class="flex gap-2">
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white transition-colors">
<span class="material-icons-round text-lg">chevron_left</span>
</button>
<button class="w-8 h-8 rounded-lg flex items-center justify-center bg-primary text-white font-medium text-sm">1</button>
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white transition-colors">2</button>
<button class="w-8 h-8 rounded-lg flex items-center justify-center text-gray-400 hover:bg-gray-700 hover:text-white transition-colors">
<span class="material-icons-round text-lg">chevron_right</span>
</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>=