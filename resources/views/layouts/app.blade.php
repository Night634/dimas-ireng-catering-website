<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dimas Ireng Catering — Cita Rasa Tradisi & Hajatan')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,500&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        parchment: '#FDFBF7',
                        cream: '#FBF8F1',
                        'cream-border': '#EADBBA',
                        charcoal: '#1F2937',
                        'heritage-primary': '#735C00',
                        'heritage-secondary': '#855300',
                        gold: {
                            DEFAULT: '#D4AF37',
                            amber: '#F5B800',
                            fixed: '#FFE088',
                            dim: '#E9C349',
                            dark: '#554300',
                        }
                    },
                    boxShadow: {
                        'ambient': '0 14px 34px -10px rgba(31, 41, 55, 0.08), 0 4px 14px -2px rgba(212, 175, 55, 0.08)',
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-4px); }
        }
        .animate-float-slow { animation: floatSlow 3.5s ease-in-out infinite; }
    </style>
</head>
<body class="bg-parchment text-charcoal font-sans antialiased selection:bg-gold/25 selection:text-heritage-primary"
      x-data="{
          toasts: [],
          notify(title, message = '', type = 'success') {
              const id = Date.now() + Math.random();
              this.toasts.push({ id, title, message, type });
              setTimeout(() => {
                  this.toasts = this.toasts.filter(t => t.id !== id);
              }, 3600);
          }
      }"
      @notify.window="notify($event.detail.title, $event.detail.message, $event.detail.type || 'success')">

    <!-- GLOBAL ANIMATED TOAST NOTIFICATIONS -->
    <div class="fixed top-20 right-4 sm:right-6 z-[60] flex flex-col gap-2.5 w-[calc(100%-2rem)] max-w-sm pointer-events-none">
        <template x-for="toast in toasts" :key="toast.id">
            <div x-show="true"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-x-8 scale-95"
                 x-transition:enter-end="opacity-100 translate-x-0 scale-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100 translate-x-0 scale-100"
                 x-transition:leave-end="opacity-0 translate-x-8 scale-95"
                 class="pointer-events-auto rounded-2xl bg-white border border-gold/40 shadow-ambient p-4 flex items-start gap-3">
                <div class="w-8 h-8 rounded-full flex items-center justify-center shrink-0 mt-0.5"
                     :class="toast.type === 'warning' ? 'bg-amber-100 text-amber-800' : 'bg-emerald-50 text-emerald-700 border border-emerald-200'">
                    <svg x-show="toast.type !== 'warning'" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    <svg x-show="toast.type === 'warning'" class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01M12 3l9 16H3L12 3z"/></svg>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-semibold text-charcoal leading-snug" x-text="toast.title"></p>
                    <p x-show="toast.message" class="text-xs text-charcoal/70 mt-0.5 leading-relaxed" x-text="toast.message"></p>
                </div>
                <button @click="toasts = toasts.filter(t => t.id !== toast.id)" class="text-charcoal/40 hover:text-charcoal text-xs p-1">✕</button>
            </div>
        </template>
    </div>

    @yield('content')
</body>
</html>