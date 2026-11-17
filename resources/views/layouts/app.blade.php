<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dimas Ireng Catering — Cita Rasa Tradisi & Hajatan')</title>
    
    <!-- Google Fonts: Fraunces (Editorial Warm Serif) & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS & Alpine.js (Bisa diganti dengan directive Vite saat build production) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Fraunces"', 'Georgia', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        ivory: '#FAF8F5',
                        sand: '#F3EFE6',
                        gold: {
                            light: '#FEF6E4',
                            DEFAULT: '#D99B26',
                            dark: '#9A6B11',
                            deep: '#785008',
                        },
                        charcoal: '#1E1B18',
                    }
                }
            }
        }
    </script>
    <style>
        [x-cloak] { display: none !important; }
        /* Custom subtle scrollbar */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #FAF8F5; }
        ::-webkit-scrollbar-thumb { background: #D6CFC2; border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: #D99B26; }
        
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-4px); }
        }
        .animate-float-slow { animation: floatSlow 3.5s ease-in-out infinite; }
    </style>
</head>
<body class="bg-ivory text-charcoal font-sans antialiased selection:bg-gold/20 selection:text-gold-deep">
    @yield('content')
</body>
</html>