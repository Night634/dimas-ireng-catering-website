@extends('layouts.app')

@section('content')
@php
$menus = [
    [
        'id' => 1,
        'name' => 'Bento Nasi Kuning Istimewa',
        'category' => 'Nasi Box',
        'provenance' => 'Kunyit Segar Temanggung',
        'badge' => 'PILIHAN UTAMA',
        'price' => 29500,
        'min_order' => 5,
        'image' => 'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Nasi kuning pulen wangi santan rempah, ayam suwir ketumbar, telur balado resep pusaka, tempe orek manis pedas gurih, dan lalapan segar.',
        'variants' => [
            ['name' => 'Nasi Kuning Gurih', 'extra' => 0],
            ['name' => 'Nasi Putih Pandan', 'extra' => 0],
            ['name' => 'Nasi Uduk Betawi', 'extra' => 2000],
            ['name' => 'Nasi Liwet Sunda', 'extra' => 2500],
        ]
    ],
    [
        'id' => 2,
        'name' => 'Nasi Box Ayam Bakar Madu Ireng',
        'category' => 'Nasi Box',
        'provenance' => 'Resep Warisan Dapur',
        'badge' => 'KHAS DAPUR',
        'price' => 32000,
        'min_order' => 5,
        'image' => 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Ayam bakar bumbu hitam madu hutan yang meresap sampai ke tulang, sambal bajak terasi, tahu bacem, dan lalapan segar.',
        'variants' => [
            ['name' => 'Nasi Putih Daun Pandan', 'extra' => 0],
            ['name' => 'Nasi Uduk Rempah', 'extra' => 2000],
        ]
    ],
    [
        'id' => 3,
        'name' => 'Paket Prasmanan Selera Nusantara',
        'category' => 'Prasmanan',
        'provenance' => 'Minimal 30 Pax',
        'badge' => 'HAJATAN AKBAR',
        'price' => 65000,
        'min_order' => 30,
        'image' => 'https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Lengkap dengan meja saji, pemanas, peralatan makan, 6 pilihan lauk utama, sop kimlo, buah potong, dan es teh.',
        'variants' => [
            ['name' => 'Set Hajatan A (Rendang Daging)', 'extra' => 0],
            ['name' => 'Set Hajatan B (Empal Gentong)', 'extra' => 5000],
        ]
    ],
    [
        'id' => 4,
        'name' => 'Tumpeng Mini Syukuran Berkah',
        'category' => 'Tumpeng',
        'provenance' => 'Kemasan Besek & Mika',
        'badge' => 'SYUKURAN',
        'price' => 38000,
        'min_order' => 10,
        'image' => 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Tumpeng kerucut kuning wangi, perkedel kentang lembut, ayam goreng lengkuas, urap sayur, dan sambal goreng kentang ati.',
        'variants' => [
            ['name' => 'Nasi Kuning Pusaka', 'extra' => 0],
            ['name' => 'Nasi Gurih Santan', 'extra' => 1500],
        ]
    ],
    [
        'id' => 5,
        'name' => 'Snack Box Tradisional Manis Gurih',
        'category' => 'Snack Box',
        'provenance' => 'Kue Basah Pagi Hari',
        'badge' => 'JAMUAN RAPAT',
        'price' => 18000,
        'min_order' => 15,
        'image' => 'https://images.unsplash.com/photo-1509440159596-0249088772ff?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Lemper bakar ayam suwir gurih, risoles ragout ayam creamy, kue lumpur kentang, dan air mineral gelas dalam kotak kraft.',
        'variants' => [
            ['name' => 'Isi 3 Kue Tradisional + Air Mineral', 'extra' => 0],
            ['name' => 'Isi 4 Kue Premium + Teh Kotak', 'extra' => 4500],
        ]
    ],
    [
        'id' => 6,
        'name' => 'Nasi Box Rendang Daging Payakumbuh',
        'category' => 'Nasi Box',
        'provenance' => 'Santan Peras Segar',
        'badge' => 'EDISI SPESIAL',
        'price' => 39500,
        'min_order' => 5,
        'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80',
        'summary' => 'Rendang daging sapi empuk dimasak perlahan dengan santan kental, gulai nangka muda, sambal lado mudo, dan kerupuk kulit.',
        'variants' => [
            ['name' => 'Nasi Putih Pulen', 'extra' => 0],
            ['name' => 'Nasi Daun Jeruk', 'extra' => 2500],
        ]
    ]
];

$testimonials = [
    [
        'quote' => 'Pesan 250 pax Bento Nasi Kuning untuk acara gathering kantor tahunan di Sudirman. Pengiriman tiba 45 menit sebelum acara mulai, masakan masih hangat, dan semua divisi memuji kelembutan ayam suwirnya.',
        'author' => 'Raden Arya Kusuma',
        'context' => 'PT Mitra Indonesia • 250 Pax Bento',
        'date' => 'Oktober 2026'
    ],
    [
        'quote' => 'Tumpeng Mini Syukuran untuk acara 7 bulanan anak saya cantik sekali kemasannya. Tamu-tamu bawa pulang dan bilang rasanya otentik kayak masakan rumahan keluarga. CS Dimas Ireng juga sangat responsif saat ganti jam kirim.',
        'author' => 'dr. Dian Anggraini',
        'context' => 'Acara Syukuran Keluarga • 60 Pax',
        'date' => 'November 2026'
    ],
    [
        'quote' => 'Ayam Bakar Madu Ireng bumbunya meresap sampai ke dalam, tidak kering sama sekali. Sudah 4 kali pesan untuk pengajian keluarga besar. Porsinya pas, sambal bajaknya nagih banget!',
        'author' => 'H. Syaiful Anwar',
        'context' => 'Pengajian Rutin • 120 Pax Nasi Box',
        'date' => 'November 2026'
    ]
];
@endphp

<div x-data="cateringApp({{ json_encode($menus) }})" class="min-h-screen flex flex-col bg-parchment">

    <!-- 1. STICKY EDITORIAL HEADER -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-cream-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand Logo -->
                <div class="flex items-center gap-3.5">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 rounded-full border border-gold flex items-center justify-center p-0.5 bg-cream group-hover:scale-105 transition-transform">
                            <div class="w-full h-full rounded-full border border-gold/60 flex items-center justify-center font-serif font-bold text-sm text-heritage-primary">
                                DI
                            </div>
                        </div>
                        <div>
                            <span class="font-serif font-bold text-base sm:text-lg tracking-tight text-charcoal block leading-none">Dimas Ireng</span>
                            <span class="text-[10px] font-bold uppercase tracking-[0.14em] text-heritage-primary mt-1 block">Nusantara Heritage</span>
                        </div>
                    </a>

                    <span class="hidden md:inline-flex items-center gap-1.5 h-7 px-3 rounded-full bg-cream border border-cream-border text-charcoal text-[11px] font-bold tracking-wider uppercase">
                        <x-icon.halal-stamp class="w-3.5 h-3.5 text-emerald-600" />
                        100% Halal ID
                    </span>
                </div>

                <!-- Center Navigation -->
                <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-charcoal/80">
                    <a href="#katalog" class="hover:text-heritage-primary transition-colors">Katalog Sajian</a>
                    <a href="#katalog" @click="selectedCategory = 'Prasmanan'" class="hover:text-heritage-primary transition-colors">Prasmanan & Tumpeng</a>
                    <a href="#testimoni" class="hover:text-heritage-primary transition-colors">Catatan Pelanggan</a>
                    <a href="{{ route('admin.dashboard') }}" class="text-xs px-3.5 py-1.5 rounded-full bg-cream border border-cream-border text-heritage-primary font-semibold hover:border-gold transition-colors">
                        Panel Dapur →
                    </a>
                </nav>

                <!-- Right Cart & Login -->
                <div class="flex items-center gap-2.5">
                    <button @click="cartOpen = true" class="relative h-11 w-11 rounded-xl bg-cream hover:bg-gold/15 border border-cream-border text-charcoal flex items-center justify-center transition-all active:scale-95" aria-label="Keranjang Pesanan">
                        <x-icon.besek class="w-5 h-5 text-charcoal" />
                        <span x-show="cart.length > 0" x-transition.scale x-text="totalCartBoxes" class="absolute -top-1.5 -right-1.5 min-w-[20px] h-5 px-1 rounded-full bg-gold-amber text-charcoal text-[11px] font-bold flex items-center justify-center border-2 border-white"></span>
                    </button>

                    <a href="{{ route('auth') }}" class="hidden sm:inline-flex items-center justify-center h-11 px-5 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs font-bold uppercase tracking-wider transition-all shadow-xs active:scale-95">
                        Masuk
                    </a>

                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden h-11 w-11 rounded-xl border border-cream-border bg-cream text-charcoal flex items-center justify-center">
                        <svg x-show="!mobileMenuOpen" class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                        <svg x-show="mobileMenuOpen" x-cloak class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-collapse x-cloak class="lg:hidden bg-white border-t border-cream-border px-5 pt-3 pb-5 space-y-2 shadow-ambient">
            <a href="#katalog" @click="mobileMenuOpen = false" class="block py-2.5 px-3.5 rounded-xl text-sm font-medium hover:bg-parchment">Katalog Sajian</a>
            <a href="#katalog" @click="selectedCategory = 'Prasmanan'; mobileMenuOpen = false" class="block py-2.5 px-3.5 rounded-xl text-sm font-medium hover:bg-parchment">Prasmanan & Tumpeng</a>
            <a href="#testimoni" @click="mobileMenuOpen = false" class="block py-2.5 px-3.5 rounded-xl text-sm font-medium hover:bg-parchment">Catatan Pelanggan</a>
            <div class="pt-2 flex gap-2.5">
                <a href="{{ route('auth') }}" class="flex-1 h-11 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center transition-colors">Masuk / Daftar</a>
                <a href="{{ route('admin.dashboard') }}" class="flex-1 h-11 rounded-xl bg-cream border border-cream-border text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center">Panel Admin</a>
            </div>
        </div>
    </header>

    <!-- 2. HERO BANNER + ROUNDED #F5B800 BOOKING CARD -->
    <section class="relative">
        <div id="pesan" class="relative h-[370px] sm:h-[430px] lg:h-[460px] overflow-hidden">
            <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=1600&q=80" alt="Prasmanan Dimas Ireng Catering" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-b from-charcoal/85 via-charcoal/70 to-charcoal/90"></div>
            
            <div class="relative max-w-4xl mx-auto px-4 sm:px-6 h-full flex flex-col items-center justify-center text-center pb-16">
                <span class="inline-flex items-center gap-2 h-8 px-4 rounded-full bg-white/10 backdrop-blur-xs border border-gold/40 text-gold-fixed text-xs font-semibold tracking-wider uppercase mb-4">
                    <x-icon.tumpeng class="w-3.5 h-3.5 text-gold-dim" />
                    Warisan Kuliner & Hajatan Nusantara
                </span>
                <h1 class="font-serif text-3xl sm:text-5xl lg:text-[54px] lg:leading-[1.15] font-bold text-white tracking-tight">
                    Halo, Selamat datang di <span class="text-gold-dim">Dimas Ireng Catering</span>
                </h1>
                <p class="mt-4 text-sm sm:text-base lg:text-lg text-white/85 max-w-2xl leading-relaxed">
                    Kami senang dapat menemani acara spesial Anda dengan racikan rempah nusantara autentik, higienis, dan terpercaya sejak 2012.
                </p>
            </div>
        </div>

        <!-- Overlapping Solid #F5B800 Booking Card (Rounded-2xl) -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 sm:-mt-20 relative z-20">
            <div class="bg-[#F5B800] rounded-2xl p-5 sm:p-7 shadow-ambient border border-[#D4AF37]">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <div class="flex items-start sm:items-center gap-4 lg:max-w-sm">
                        <div class="w-12 h-12 rounded-2xl bg-white border border-charcoal/10 flex items-center justify-center shrink-0 shadow-xs">
                            <x-icon.cloche class="w-6 h-6 text-charcoal" />
                        </div>
                        <div>
                            <h2 class="font-serif font-bold text-charcoal text-lg sm:text-xl leading-snug">Siap memilih hidangan untuk para tamu?</h2>
                            <p class="text-xs text-charcoal/85 mt-1 leading-relaxed">Atur jadwal acara & jumlah porsi untuk verifikasi slot dapur.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-12 gap-3.5 flex-1 items-end">
                        <div class="sm:col-span-4">
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Tanggal Pengiriman</label>
                            <input type="date" x-model="booking.date" class="w-full h-12 px-3.5 rounded-xl bg-white text-charcoal text-sm font-medium border border-charcoal/15 focus:outline-none focus:ring-2 focus:ring-charcoal">
                        </div>
                        <div class="sm:col-span-3">
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Waktu Santap</label>
                            <select x-model="booking.time" class="w-full h-12 px-3.5 rounded-xl bg-white text-charcoal text-sm font-medium border border-charcoal/15 focus:outline-none focus:ring-2 focus:ring-charcoal">
                                <option value="10:00 WIB (Pagi)">10:00 WIB</option>
                                <option value="12:00 WIB (Siang)">12:00 WIB</option>
                                <option value="15:30 WIB (Sore)">15:30 WIB</option>
                                <option value="18:30 WIB (Malam)">18:30 WIB</option>
                            </select>
                        </div>
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Jumlah Pax</label>
                            <input type="number" min="5" x-model.number="booking.pax" class="w-full h-12 px-3 rounded-xl bg-white text-charcoal text-sm font-bold text-center border border-charcoal/15 focus:outline-none focus:ring-2 focus:ring-charcoal">
                        </div>
                        <div class="sm:col-span-3">
                            <a href="#katalog" @click="$dispatch('notify', { title: 'Jadwal Acara Diterapkan', message: booking.date + ' • ' + booking.time + ' (' + booking.pax + ' Pax)' })"
                               class="w-full h-12 px-5 rounded-xl bg-charcoal hover:bg-stone-800 text-white text-xs sm:text-sm font-bold uppercase tracking-wider flex items-center justify-center gap-2 transition-all whitespace-nowrap shadow-xs active:scale-95">
                                <span>Pesan Sekarang</span>
                                <span>→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. MENU CATALOG SECTION -->
    <section id="katalog" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-14 sm:pt-20 pb-20 w-full">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
            <div>
                <span class="inline-flex items-center gap-1.5 text-xs font-bold uppercase tracking-widest text-heritage-primary">
                    <x-icon.bento-box class="w-4 h-4 text-gold" />
                    Kurasi Sajian Hajatan & Kantor
                </span>
                <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-charcoal tracking-tight mt-1">
                    Pilihan Menu Favorit Keluarga & Kantor
                </h2>
                <p class="text-sm text-charcoal/70 mt-1.5">Disiapkan segar pada hari pengiriman, dikemas higienis, dan terjamin kehalalan bahannya.</p>
            </div>

            <div class="flex items-center gap-2.5">
                <span class="text-xs font-medium text-charcoal/65">Urutkan:</span>
                <select x-model="sortBy" class="h-11 px-4 rounded-xl bg-white border border-cream-border text-sm font-medium text-charcoal focus:outline-none focus:border-gold">
                    <option value="popular">Paling Banyak Dipilih</option>
                    <option value="price_asc">Harga Terendah</option>
                    <option value="price_desc">Harga Tertinggi</option>
                </select>
            </div>
        </div>

        <!-- Category Pills -->
        <div class="flex items-center gap-2.5 overflow-x-auto pb-3 mb-8 no-scrollbar">
            <template x-for="cat in ['Semua Menu', 'Nasi Box', 'Prasmanan', 'Snack Box', 'Tumpeng']" :key="cat">
                <button @click="selectedCategory = cat"
                    :class="selectedCategory === cat ? 'bg-gold-amber border-gold-amber text-charcoal shadow-2xs' : 'bg-white border-cream-border text-charcoal/75 hover:border-gold'"
                    class="h-9 px-4 rounded-full border text-xs font-bold uppercase tracking-wider whitespace-nowrap transition-all">
                    <span x-text="cat"></span>
                </button>
            </template>
        </div>

        <!-- Menu Cards Grid (Rounded-2xl) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="menu in filteredMenus" :key="menu.id">
                <article class="group bg-white rounded-2xl border border-cream-border hover:border-gold hover:shadow-ambient transition-all duration-300 flex flex-col overflow-hidden">
                    <div class="relative aspect-[4/3] overflow-hidden bg-cream">
                        <img :src="menu.image" :alt="menu.name" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <span x-text="menu.badge" class="absolute top-3.5 left-3.5 h-7 px-3 rounded-full bg-white/95 backdrop-blur-xs border border-gold/40 text-charcoal text-[11px] font-bold uppercase tracking-wider flex items-center"></span>
                        <span x-text="menu.category" class="absolute top-3.5 right-3.5 h-7 px-3 rounded-full bg-charcoal/85 text-white text-[11px] font-semibold flex items-center"></span>
                    </div>

                    <div class="p-6 flex-1 flex flex-col justify-between">
                        <div>
                            <div class="flex items-baseline justify-between gap-2">
                                <span class="text-xs font-semibold text-heritage-primary" x-text="menu.provenance"></span>
                                <span class="font-bold text-lg text-charcoal" x-text="formatRupiah(menu.price)"></span>
                            </div>
                            <h3 class="font-serif font-bold text-xl text-charcoal mt-1.5 group-hover:text-heritage-primary transition-colors leading-snug" x-text="menu.name"></h3>
                            <p class="text-sm text-charcoal/70 mt-2 line-clamp-3 leading-relaxed" x-text="menu.summary"></p>
                        </div>

                        <button @click="openMenuModal(menu)" class="mt-6 w-full h-12 rounded-xl bg-cream hover:bg-gold-amber border border-cream-border hover:border-gold-amber text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-2 transition-all active:scale-[0.98]">
                            <span>Pilih Menu & Varian</span>
                            <span>→</span>
                        </button>
                    </div>
                </article>
            </template>
        </div>
    </section>

    <!-- 4. EDITORIAL ASSURANCE STRIP -->
    <section class="border-y border-cream-border bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:divide-x md:divide-cream-border">
                <div class="md:pr-8 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-cream border border-cream-border flex items-center justify-center shrink-0">
                        <x-icon.halal-stamp class="w-6 h-6 text-emerald-600" />
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-heritage-primary">Jaminan Kehalalan</span>
                        <h3 class="font-serif font-bold text-xl text-charcoal mt-1">Sertifikasi Halal Resmi MUI</h3>
                        <p class="text-sm text-charcoal/70 mt-1.5 leading-relaxed">
                            Seluruh bahan baku daging, unggas, dan bumbu rempah bersertifikat halal penuh LPPOM MUI dengan rantai pasok teraudit.
                        </p>
                    </div>
                </div>

                <div class="md:px-8 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-cream border border-cream-border flex items-center justify-center shrink-0">
                        <x-icon.armada-box class="w-6 h-6 text-heritage-primary" />
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-heritage-primary">Ketepatan Waktu</span>
                        <h3 class="font-serif font-bold text-xl text-charcoal mt-1">Tiba 45 Menit Sebelum Acara</h3>
                        <p class="text-sm text-charcoal/70 mt-1.5 leading-relaxed">
                            Pengiriman menggunakan armada boks bersegel suhu agar hidangan tiba hangat sebelum waktu santap tamu dimulai.
                        </p>
                    </div>
                </div>

                <div class="md:pl-8 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-cream border border-cream-border flex items-center justify-center shrink-0">
                        <x-icon.tumpeng class="w-6 h-6 text-heritage-primary" />
                    </div>
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-heritage-primary">Dapur Pusaka</span>
                        <h3 class="font-serif font-bold text-xl text-charcoal mt-1">Dimasak Segar Hari Pengiriman</h3>
                        <p class="text-sm text-charcoal/70 mt-1.5 leading-relaxed">
                            Tanpa pengawet maupun bumbu instan. Setiap porsi diolah langsung oleh juru masak berpengalaman pada pagi hari acara.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. EDITORIAL TESTIMONIALS -->
    <section id="testimoni" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 w-full">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <span class="inline-flex items-center gap-1.5 h-7 px-3.5 rounded-full bg-cream border border-cream-border text-heritage-primary text-xs font-bold uppercase tracking-wider">
                Catatan Pelanggan
            </span>
            <h2 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-charcoal mt-3">
                Hajatan Sukses Bersama Dimas Ireng
            </h2>
            <p class="text-sm sm:text-base text-charcoal/70 mt-2">Telah melayani lebih dari 12.500+ acara korporat, aqiqah, syukuran, dan pernikahan di Jabodetabek.</p>
        </div>

        <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto pb-4 md:pb-0 snap-x snap-mandatory no-scrollbar">
            @foreach($testimonials as $item)
            <article class="min-w-[85%] sm:min-w-[60%] md:min-w-0 snap-center bg-white rounded-2xl p-6 sm:p-7 border border-cream-border flex flex-col justify-between shadow-2xs">
                <div>
                    <div class="flex items-center justify-between text-xs pb-4 border-b border-cream-border">
                        <span class="font-semibold text-heritage-primary">{{ $item['context'] }}</span>
                        <span class="text-charcoal/50">{{ $item['date'] }}</span>
                    </div>
                    <blockquote class="font-serif text-base text-charcoal leading-relaxed mt-4">
                        “{{ $item['quote'] }}”
                    </blockquote>
                </div>

                <div class="mt-6 pt-4 border-t border-cream-border flex items-center justify-between">
                    <div>
                        <p class="font-bold text-sm text-charcoal">{{ $item['author'] }}</p>
                        <p class="text-xs text-emerald-700 font-medium flex items-center gap-1 mt-0.5">
                            <x-icon.halal-stamp class="w-3.5 h-3.5 text-emerald-600" />
                            Pemesan Terverifikasi
                        </p>
                    </div>
                </div>
            </article>
            @endforeach
        </div>
    </section>

    <!-- 6. FOOTER -->
    <footer class="bg-charcoal text-white/80 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full border border-gold flex items-center justify-center font-serif font-bold text-sm text-gold-dim">
                            DI
                        </div>
                        <div>
                            <span class="font-serif font-bold text-lg text-white block leading-none">Dimas Ireng Catering</span>
                            <span class="text-[10px] uppercase tracking-widest text-gold-dim mt-1 block">Nusantara Heritage</span>
                        </div>
                    </div>
                    <p class="text-xs text-white/65 leading-relaxed">
                        Melayani sajian prasmanan pusaka, tumpeng istimewa, dan ragam bento hajatan dengan cita rasa otentik bumbu rempah nusantara serta dedikasi higienis bersertifikasi.
                    </p>
                    <div class="pt-1">
                        <span class="inline-flex h-8 px-3.5 rounded-full bg-white/5 border border-gold/30 text-[11px] font-semibold text-gold-fixed items-center gap-1.5">
                            <x-icon.halal-stamp class="w-3.5 h-3.5 text-gold-dim" />
                            Halal ID: 00160098420919
                        </span>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Workshop & Dapur Utama</h4>
                    <div class="text-xs text-white/65 space-y-2.5 leading-relaxed">
                        <p>
                            <strong class="text-white block">Dapur Pusat Jakarta Timur:</strong>
                            Jl. Raya Pondok Kelapa No. 48, Duren Sawit, Jakarta Timur 13450
                        </p>
                        <p>
                            <strong class="text-white block">Dapur Satelit Selatan:</strong>
                            Jl. Mataram Raya No. 18, Kebayoran Baru, Jakarta Selatan
                        </p>
                        <p class="text-gold-dim font-semibold pt-1">
                            WhatsApp CS: +62 896-7357-4078
                        </p>
                    </div>
                </div>

                <div class="lg:col-span-3 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Operasional & Armada</h4>
                    <div class="text-xs text-white/65 space-y-2.5 leading-relaxed">
                        <p>
                            <strong class="text-white block">Jam Produksi & Pengiriman:</strong>
                            Setiap Hari • 05.00 – 20.00 WIB
                        </p>
                        <div>
                            <strong class="text-white block mb-1">Jangkauan Wilayah:</strong>
                            <ul class="space-y-1 list-disc list-inside">
                                <li>Seluruh Wilayah DKI Jakarta</li>
                                <li>Tangerang & Tangerang Selatan</li>
                                <li>Bekasi, Depok & Bogor Kota</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-2 space-y-3">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-white">Layanan Unggulan</h4>
                    <ul class="text-xs text-white/65 space-y-2">
                        <li><a href="#katalog" @click="selectedCategory = 'Prasmanan'" class="hover:text-gold-dim transition-colors">Prasmanan Pernikahan</a></li>
                        <li><a href="#katalog" @click="selectedCategory = 'Tumpeng'" class="hover:text-gold-dim transition-colors">Tumpeng Hias & Mini</a></li>
                        <li><a href="#katalog" @click="selectedCategory = 'Snack Box'" class="hover:text-gold-dim transition-colors">Snack Box Rapat Kantor</a></li>
                        <li><a href="#katalog" @click="selectedCategory = 'Nasi Box'" class="hover:text-gold-dim transition-colors">Paket Aqiqah & Syukuran</a></li>
                    </ul>
                </div>
            </div>

            <div class="mt-12 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-white/50">
                <p>© 2026 Dimas Ireng Catering. Seluruh Hak Cipta Dilindungi.</p>
                <div class="flex items-center gap-5">
                    <a href="#" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="#" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- 7. POP-UP KUSTOMISASI MENU (Rounded-3xl) -->
    <div x-show="activeModalMenu" x-cloak class="fixed inset-0 z-50 flex items-end sm:items-center justify-center p-0 sm:p-4 bg-charcoal/60 backdrop-blur-xs"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        
        <div @click.away="activeModalMenu = null" x-show="activeModalMenu"
             x-transition:enter="transition ease-out duration-250" x-transition:enter-start="opacity-0 translate-y-8 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             class="relative w-full max-w-3xl bg-white rounded-t-3xl sm:rounded-3xl shadow-ambient border border-cream-border overflow-hidden max-h-[92vh] flex flex-col">
            
            <button @click="activeModalMenu = null" class="absolute top-4 right-4 z-10 w-10 h-10 rounded-full bg-cream hover:bg-gold-amber/30 border border-cream-border text-charcoal flex items-center justify-center transition-colors">
                ✕
            </button>

            <div class="overflow-y-auto p-6 sm:p-8" x-if="activeModalMenu">
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 sm:gap-8">
                    <div class="md:col-span-5">
                        <div class="aspect-square rounded-2xl overflow-hidden bg-cream border border-cream-border">
                            <img :src="activeModalMenu.image" :alt="activeModalMenu.name" class="w-full h-full object-cover">
                        </div>
                        <p class="mt-3 text-xs text-charcoal/60 leading-relaxed">
                            <strong class="text-charcoal">Informasi:</strong> Foto hanya untuk ilustrasi penyajian. Menu dimasak segar pada hari pengantaran.
                        </p>
                    </div>

                    <div class="md:col-span-7 flex flex-col justify-between">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-wider text-heritage-primary" x-text="activeModalMenu.category"></span>
                            <h3 class="font-serif text-2xl sm:text-3xl font-bold text-charcoal mt-1" x-text="activeModalMenu.name"></h3>
                            <p class="text-xl sm:text-2xl font-bold text-heritage-primary mt-1" x-text="formatRupiah(currentModalUnitPrice)"></p>
                            <p class="text-sm text-charcoal/75 mt-3 leading-relaxed pb-4 border-b border-cream-border" x-text="activeModalMenu.summary"></p>

                            <div class="mt-4 space-y-4">
                                <div>
                                    <label class="block text-xs font-bold text-charcoal mb-1.5">
                                        Pilihan Nasi / Paket Utama <span class="text-rose-600">*</span>
                                    </label>
                                    <select x-model="modalForm.variantIndex" class="w-full h-12 px-3.5 rounded-xl bg-parchment border border-cream-border text-sm font-medium text-charcoal focus:outline-none focus:border-gold">
                                        <template x-for="(v, idx) in activeModalMenu.variants" :key="idx">
                                            <option :value="idx" x-text="v.name + (v.extra > 0 ? ' (+' + formatRupiah(v.extra) + ')' : ' (Termasuk)')"></option>
                                        </template>
                                    </select>
                                </div>

                                <div class="flex flex-wrap items-center justify-between gap-4 pt-1">
                                    <div>
                                        <label class="block text-xs font-bold text-charcoal mb-1.5">Jumlah Pesanan</label>
                                        <div class="inline-flex items-center rounded-xl border border-cream-border bg-parchment p-1">
                                            <button type="button" @click="if(modalForm.qty > activeModalMenu.min_order) modalForm.qty--" class="w-9 h-9 rounded-lg bg-white text-charcoal font-bold hover:bg-cream">-</button>
                                            <input type="number" :min="activeModalMenu.min_order" x-model.number="modalForm.qty" class="w-14 text-center bg-transparent text-sm font-bold text-charcoal border-0 focus:ring-0">
                                            <button type="button" @click="modalForm.qty++" class="w-9 h-9 rounded-lg bg-white text-charcoal font-bold hover:bg-cream">+</button>
                                        </div>
                                        <span class="text-xs text-charcoal/65 ml-2">Kotak / Pax</span>
                                    </div>

                                    <div class="text-right">
                                        <span class="block text-xs text-charcoal/65">Subtotal Pesanan</span>
                                        <span class="text-xl sm:text-2xl font-bold text-charcoal" x-text="formatRupiah(currentModalSubtotal)"></span>
                                    </div>
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-charcoal mb-1.5">Catatan Tambahan</label>
                                    <textarea rows="2" x-model="modalForm.notes" placeholder="Contoh: Sambal dipisah, tanpa kacang, atau request jam tiba..." class="w-full p-3 rounded-xl bg-parchment border border-cream-border text-sm focus:outline-none focus:border-gold"></textarea>
                                </div>
                            </div>
                        </div>

                        <button @click="addToCart()" class="mt-6 w-full h-12 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-2 transition-all shadow-xs active:scale-[0.98]">
                            <x-icon.besek class="w-5 h-5 text-charcoal" />
                            <span>Tambahkan ke Keranjang</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 8. SLIDE-OVER CART DRAWER -->
    <div x-show="cartOpen" x-cloak class="fixed inset-0 z-50 flex justify-end bg-charcoal/55 backdrop-blur-xs"
         x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
        <div @click.away="cartOpen = false" x-show="cartOpen"
             x-transition:enter="transition transform ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
             class="w-full max-w-md bg-white h-full shadow-ambient flex flex-col justify-between">
            
            <div class="p-6 border-b border-cream-border flex items-center justify-between bg-parchment">
                <div>
                    <h3 class="font-serif font-bold text-xl text-charcoal">Keranjang Sajian</h3>
                    <p class="text-xs text-charcoal/65 mt-0.5" x-text="'Jadwal: ' + booking.date + ' • ' + booking.time"></p>
                </div>
                <button @click="cartOpen = false" class="w-10 h-10 rounded-full bg-cream hover:bg-gold/20 border border-cream-border text-charcoal flex items-center justify-center">✕</button>
            </div>

            <div class="flex-1 overflow-y-auto p-6 space-y-4">
                <template x-if="cart.length === 0">
                    <div class="text-center py-16">
                        <p class="font-serif text-lg text-charcoal/60">Keranjang masih kosong</p>
                        <p class="text-xs text-charcoal/50 mt-1">Silakan pilih menu katering terlebih dahulu.</p>
                    </div>
                </template>

                <template x-for="(item, index) in cart" :key="index">
                    <div class="p-4 rounded-2xl border border-cream-border bg-parchment flex gap-3.5">
                        <img :src="item.image" class="w-16 h-16 rounded-xl object-cover shrink-0">
                        <div class="flex-1 min-w-0">
                            <div class="flex justify-between items-start gap-2">
                                <h4 class="font-serif font-bold text-sm text-charcoal truncate" x-text="item.name"></h4>
                                <button @click="removeFromCart(index)" class="rounded-lg px-2 py-0.5 text-xs text-rose-600 hover:bg-rose-50 font-medium">Hapus</button>
                            </div>
                            <p class="text-xs text-heritage-primary font-semibold mt-0.5" x-text="'Varian: ' + item.variantName"></p>
                            <p x-show="item.notes" class="text-xs text-charcoal/60 italic mt-0.5" x-text="'Catatan: ' + item.notes"></p>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-cream-border">
                                <span class="text-xs text-charcoal/70" x-text="item.qty + ' Kotak × ' + formatRupiah(item.unitPrice)"></span>
                                <span class="text-sm font-bold text-charcoal" x-text="formatRupiah(item.subtotal)"></span>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div x-show="cart.length > 0" class="p-6 border-t border-cream-border bg-parchment space-y-3">
                <div class="flex justify-between items-center">
                    <span class="text-sm text-charcoal/70">Total Estimasi</span>
                    <span class="font-serif text-2xl font-bold text-heritage-primary" x-text="formatRupiah(totalCartAmount)"></span>
                </div>
                <a href="{{ route('checkout') }}" class="w-full h-12 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center transition-colors shadow-xs">
                    Lanjut ke Konfirmasi & Checkout →
                </a>
                <button @click="sendCartToWhatsApp()" class="w-full h-11 rounded-xl bg-white hover:bg-cream border border-cream-border text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-2 transition-colors">
                    <span>Kirim Draft Pesanan via WhatsApp</span>
                </button>
            </div>
        </div>
    </div>

    <!-- 9. FLOATING WHATSAPP CS WIDGET -->
    <div x-data="{ waOpen: false }" class="fixed bottom-5 right-5 z-40">
        <div x-show="waOpen" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-4 scale-95" x-transition:enter-end="opacity-100 translate-y-0 scale-100"
             class="mb-3 w-72 sm:w-80 bg-white rounded-2xl shadow-ambient border border-cream-border overflow-hidden">
            <div class="bg-charcoal p-4 text-white flex items-center justify-between">
                <div class="flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-full border border-gold flex items-center justify-center font-serif font-bold text-xs text-gold-dim">CS</div>
                    <div>
                        <p class="text-sm font-semibold leading-none">Konsultasi Dapur Dimas Ireng</p>
                        <p class="text-[11px] text-gold-fixed mt-1 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Online • Respon &lt; 5 Menit
                        </p>
                    </div>
                </div>
                <button @click="waOpen = false" class="text-gold-dim hover:text-white text-sm">✕</button>
            </div>
            <div class="p-4 bg-parchment space-y-2.5">
                <p class="text-xs text-charcoal bg-white p-3.5 rounded-xl border border-cream-border leading-relaxed">
                    Halo! Ada yang bisa kami bantu untuk rencana acara hajatan atau pesanan kantor Anda?
                </p>
                <div class="space-y-1.5 pt-1">
                    <a href="https://wa.me/6289673574078?text=Halo%20Dimas%20Ireng%20Catering,%20saya%20ingin%20tanya%20paket%20prasmanan%20hajatan" target="_blank" class="block text-xs font-semibold text-charcoal bg-white hover:bg-cream border border-cream-border px-3.5 py-2.5 rounded-xl transition-colors">
                        Tanya Paket Prasmanan & Tumpeng →
                    </a>
                    <a href="https://wa.me/6289673574078?text=Halo%20Dimas%20Ireng%20Catering,%20saya%20ingin%20konsultasi%20menu%20nasi%20box" target="_blank" class="block text-xs font-semibold text-charcoal bg-white hover:bg-cream border border-cream-border px-3.5 py-2.5 rounded-xl transition-colors">
                        Konsultasi Menu Nasi Box & Budget →
                    </a>
                </div>
            </div>
        </div>

        <button @click="waOpen = !waOpen" class="animate-float-slow ml-auto flex items-center gap-2.5 pl-4 pr-3 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white shadow-ambient border-2 border-white transition-all active:scale-95">
            <span class="text-xs font-bold tracking-wide">Tanya Admin CS</span>
            <div class="w-7 h-7 rounded-full bg-charcoal text-gold-amber flex items-center justify-center font-bold text-[11px]">
                WA
            </div>
        </button>
    </div>

</div>

<script>
function cateringApp(initialMenus) {
    return {
        menus: initialMenus,
        selectedCategory: 'Semua Menu',
        sortBy: 'popular',
        mobileMenuOpen: false,
        cartOpen: false,
        booking: {
            date: '2026-11-18',
            time: '12:00 WIB (Siang)',
            pax: 25
        },
        activeModalMenu: null,
        modalForm: {
            variantIndex: 0,
            qty: 5,
            notes: ''
        },
        cart: [
            {
                name: 'Bento Nasi Kuning Istimewa',
                image: initialMenus[0].image,
                variantName: 'Nasi Kuning Gurih',
                unitPrice: 29500,
                qty: 5,
                subtotal: 147500,
                notes: 'Sambal dipisah'
            }
        ],
        get filteredMenus() {
            let list = this.selectedCategory === 'Semua Menu'
                ? [...this.menus]
                : this.menus.filter(m => m.category === this.selectedCategory);
            if (this.sortBy === 'price_asc') list.sort((a, b) => a.price - b.price);
            if (this.sortBy === 'price_desc') list.sort((a, b) => b.price - a.price);
            return list;
        },
        get currentModalUnitPrice() {
            if (!this.activeModalMenu) return 0;
            const variant = this.activeModalMenu.variants[this.modalForm.variantIndex] || { extra: 0 };
            return this.activeModalMenu.price + variant.extra;
        },
        get currentModalSubtotal() {
            return this.currentModalUnitPrice * (this.modalForm.qty || 1);
        },
        get totalCartBoxes() {
            return this.cart.reduce((sum, item) => sum + item.qty, 0);
        },
        get totalCartAmount() {
            return this.cart.reduce((sum, item) => sum + item.subtotal, 0);
        },
        openMenuModal(menu) {
            this.activeModalMenu = menu;
            this.modalForm = {
                variantIndex: 0,
                qty: menu.min_order,
                notes: ''
            };
        },
        addToCart() {
            const variant = this.activeModalMenu.variants[this.modalForm.variantIndex];
            const addedName = this.activeModalMenu.name;
            const addedQty = this.modalForm.qty;
            this.cart.push({
                name: addedName,
                image: this.activeModalMenu.image,
                variantName: variant.name,
                unitPrice: this.currentModalUnitPrice,
                qty: addedQty,
                subtotal: this.currentModalSubtotal,
                notes: this.modalForm.notes
            });
            this.activeModalMenu = null;
            this.cartOpen = true;
            this.$dispatch('notify', {
                title: 'Ditambahkan ke Keranjang',
                message: `${addedQty}x ${addedName} (${variant.name})`
            });
        },
        removeFromCart(index) {
            const removed = this.cart[index];
            this.cart.splice(index, 1);
            this.$dispatch('notify', {
                title: 'Menu Dihapus',
                message: `${removed.name} dikeluarkan dari keranjang.`,
                type: 'warning'
            });
        },
        sendCartToWhatsApp() {
            let lines = this.cart.map((i, idx) => `${idx+1}. ${i.name} (${i.variantName}) - ${i.qty} Pax = ${this.formatRupiah(i.subtotal)}`).join('%0A');
            let text = `Halo Dimas Ireng Catering, saya ingin memesan untuk jadwal *${this.booking.date}* jam *${this.booking.time}*:%0A%0A${lines}%0A%0A*Total: ${this.formatRupiah(this.totalCartAmount)}*`;
            window.open(`https://wa.me/6289673574078?text=${text}`, '_blank');
        },
        formatRupiah(num) {
            return 'Rp ' + Number(num).toLocaleString('id-ID');
        }
    }
}
</script>
@endsection