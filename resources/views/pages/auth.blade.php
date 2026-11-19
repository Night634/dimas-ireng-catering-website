@extends('layouts.app')

@section('title', 'Masuk atau Daftar Akun — Dimas Ireng Catering')

@section('content')
<main x-data="authApp()" class="relative min-h-screen flex items-center justify-center px-4 py-10 sm:py-14 overflow-hidden">

    <!-- Warm Culinary Background with Dark Vignette (Sesuai Gambar Referensi) -->
    <div class="fixed inset-0 -z-10">
        <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=1600&q=80" alt="Latar Belakang Sajian Dimas Ireng" class="w-full h-full object-cover object-center scale-105">
        <div class="absolute inset-0 bg-[#191613]/80 backdrop-blur-[2px]"></div>
    </div>

    <div class="w-full max-w-5xl">
        <!-- Back to Home Link -->
        <div class="mb-4">
            <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/15 text-xs font-semibold text-white backdrop-blur-xs transition-colors">
                <span>←</span>
                <span>Kembali ke Beranda</span>
            </a>
        </div>

        <!-- Split Card Container (Rounded-3xl, Seragam dengan Home & Checkout) -->
        <section class="rounded-3xl bg-white shadow-2xl border border-cream-border overflow-hidden grid grid-cols-1 lg:grid-cols-12">

            <!-- LEFT PANEL (5 Cols): Brand Heritage & Value Props -->
            <div class="lg:col-span-5 bg-cream border-b lg:border-b-0 lg:border-r border-cream-border p-7 sm:p-10 flex flex-col justify-between">
                <div>
                    <!-- Top Badges -->
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-cream-border text-[11px] font-bold text-charcoal">
                            <x-icon.halal-stamp class="w-3.5 h-3.5 text-emerald-600" />
                            100% HALAL ID
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white border border-cream-border text-[11px] font-bold text-heritage-primary">
                            <x-icon.tumpeng class="w-3.5 h-3.5 text-gold" />
                            Resep Pusaka
                        </span>
                    </div>

                    <!-- Brand Identity -->
                    <div class="flex items-center gap-3 mt-7">
                        <div class="w-11 h-11 rounded-2xl bg-gold-amber text-charcoal flex items-center justify-center font-serif font-bold text-base shadow-xs">
                            DI
                        </div>
                        <div>
                            <span class="font-serif font-bold text-lg text-charcoal block leading-none">Dimas Ireng</span>
                            <span class="text-[10px] font-bold uppercase tracking-[0.14em] text-heritage-primary mt-1 block">Catering & Hajatan</span>
                        </div>
                    </div>

                    <!-- Headline & Subtitle -->
                    <h1 class="font-serif text-2xl sm:text-3xl font-bold text-charcoal leading-tight mt-6">
                        Selamat Datang Kembali di Dimas Ireng Catering
                    </h1>
                    <p class="text-xs sm:text-sm text-charcoal/75 mt-3 leading-relaxed">
                        Akses riwayat pesanan katering, simpan alamat acara, dan nikmati penawaran khusus hajatan Anda.
                    </p>

                    <!-- 3 Heritage Bullet Highlights -->
                    <ul class="mt-7 space-y-4 text-xs text-charcoal/85">
                        <li class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-lg bg-white border border-cream-border flex items-center justify-center shrink-0 mt-0.5">
                                <x-icon.cloche class="w-4 h-4 text-heritage-primary" />
                            </div>
                            <span class="leading-relaxed">Kelola menu prasmanan & gubukan untuk hajatan akbar</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-lg bg-white border border-cream-border flex items-center justify-center shrink-0 mt-0.5">
                                <x-icon.armada-box class="w-4 h-4 text-heritage-primary" />
                            </div>
                            <span class="leading-relaxed">Pantau status faktur, nota DP, dan jadwal pengiriman armada</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <div class="w-7 h-7 rounded-lg bg-white border border-cream-border flex items-center justify-center shrink-0 mt-0.5">
                                <x-icon.besek class="w-4 h-4 text-heritage-primary" />
                            </div>
                            <span class="leading-relaxed">Simpan alamat venue & paket katering favorit keluarga</span>
                        </li>
                    </ul>
                </div>

                <!-- Bottom Metrics Strip (Sesuai Gambar Referensi) -->
                <div class="mt-8 pt-6 border-t border-cream-border grid grid-cols-3 gap-2">
                    <div>
                        <span class="font-serif font-bold text-base sm:text-lg text-charcoal block">12.500+</span>
                        <span class="text-[11px] text-charcoal/65">Porsi Terhidang</span>
                    </div>
                    <div>
                        <span class="font-serif font-bold text-base sm:text-lg text-charcoal block">4.9 / 5.0</span>
                        <span class="text-[11px] text-charcoal/65">Kepuasan Keluarga</span>
                    </div>
                    <div>
                        <span class="font-serif font-bold text-base sm:text-lg text-charcoal block">Jabodetabek</span>
                        <span class="text-[11px] text-charcoal/65">Jangkauan Armada</span>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL (7 Cols): Interactive Login & Register Form -->
            <div class="lg:col-span-7 p-7 sm:p-10 lg:p-12 flex flex-col justify-between bg-white">
                <div>
                    <!-- Segmented Tab Switcher -->
                    <div class="grid grid-cols-2 rounded-2xl bg-parchment border border-cream-border p-1.5" role="tablist">
                        <button type="button" @click="mode = 'login'"
                                :class="mode === 'login' ? 'bg-white text-charcoal shadow-xs border border-cream-border' : 'text-charcoal/60 hover:text-charcoal'"
                                class="h-11 rounded-xl text-xs sm:text-sm font-bold transition-all">
                            Masuk Akun
                        </button>
                        <button type="button" @click="mode = 'register'"
                                :class="mode === 'register' ? 'bg-white text-charcoal shadow-xs border border-cream-border' : 'text-charcoal/60 hover:text-charcoal'"
                                class="h-11 rounded-xl text-xs sm:text-sm font-bold transition-all">
                            Daftar Akun Baru
                        </button>
                    </div>

                    <!-- Dynamic Form Heading -->
                    <div class="mt-7">
                        <h2 class="font-serif text-2xl font-bold text-charcoal" x-text="mode === 'login' ? 'Akses Akun Pemesan' : 'Buat Akun Pemesan Baru'"></h2>
                        <p class="text-xs sm:text-sm text-charcoal/65 mt-1" x-text="mode === 'login' ? 'Masukkan kredensial yang terdaftar untuk melanjutkan pemesanan.' : 'Daftarkan diri atau instansi Anda untuk kemudahan pemesanan katering.'"></p>
                    </div>

                    <!-- Form Fields -->
                    <form class="mt-6 space-y-4" @submit.prevent="handleSubmit()">
                        <div x-show="mode === 'register'" x-transition>
                            <label for="name" class="block text-xs font-bold text-charcoal mb-1.5">Nama Lengkap / Nama Instansi</label>
                            <input id="name" type="text" x-model="form.name" :required="mode === 'register'" placeholder="Contoh: Raden Arya Kusuma"
                                   class="w-full h-12 px-4 rounded-xl bg-parchment border border-cream-border text-sm text-charcoal focus:outline-none focus:border-gold focus:bg-white transition-colors">
                        </div>

                        <div>
                            <label for="email" class="block text-xs font-bold text-charcoal mb-1.5">Email atau No. WhatsApp</label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-3.5 flex items-center text-charcoal/40 text-sm">@</span>
                                <input id="email" type="text" x-model="form.identifier" required placeholder="nama@email.com atau 0812xxxx"
                                       class="w-full h-12 pl-9 pr-4 rounded-xl bg-parchment border border-cream-border text-sm text-charcoal focus:outline-none focus:border-gold focus:bg-white transition-colors">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <label for="password" class="block text-xs font-bold text-charcoal">Kata Sandi</label>
                                <button type="button" x-show="mode === 'login'" @click="$dispatch('notify', { title: 'Tautan Reset Terkirim', message: 'Silakan periksa email atau WhatsApp terdaftar Anda.' })" class="text-xs font-semibold text-heritage-primary hover:underline">
                                    Lupa Kata Sandi?
                                </button>
                            </div>
                            <div class="relative">
                                <input id="password" :type="showPassword ? 'text' : 'password'" x-model="form.password" required placeholder="••••••••"
                                       class="w-full h-12 px-4 pr-11 rounded-xl bg-parchment border border-cream-border text-sm text-charcoal focus:outline-none focus:border-gold focus:bg-white transition-colors">
                                <button type="button" @click="showPassword = !showPassword" class="absolute inset-y-0 right-3.5 flex items-center text-charcoal/50 hover:text-charcoal text-xs font-semibold">
                                    <span x-text="showPassword ? 'Tutup' : 'Lihat'"></span>
                                </button>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pt-1">
                            <label class="inline-flex items-center gap-2.5 cursor-pointer select-none">
                                <input type="checkbox" x-model="form.remember" class="w-4 h-4 rounded border-cream-border text-gold-amber focus:ring-gold">
                                <span class="text-xs font-medium text-charcoal/80">Ingat sesi saya di perangkat ini</span>
                            </label>
                        </div>

                        <button type="submit" class="w-full h-12 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs sm:text-sm font-bold uppercase tracking-wider flex items-center justify-center gap-2 shadow-xs transition-all active:scale-[0.98]">
                            <span x-text="mode === 'login' ? 'Masuk ke Akun Saya' : 'Daftarkan Akun Sekarang'"></span>
                            <span>→</span>
                        </button>
                    </form>

                    <!-- Divider & Quick Google Sign-In -->
                    <div class="relative my-6">
                        <div class="absolute inset-0 flex items-center"><div class="w-full border-t border-cream-border"></div></div>
                        <div class="relative flex justify-center text-[11px] uppercase tracking-wider font-bold">
                            <span class="bg-white px-3 text-charcoal/45">Atau Masuk Cepat</span>
                        </div>
                    </div>

                    <button type="button" @click="$dispatch('notify', { title: 'Autentikasi Google', message: 'Menghubungkan akun Google Anda ke Dimas Ireng Catering...' })"
                            class="w-full h-12 rounded-xl bg-white hover:bg-parchment border border-cream-border text-charcoal text-xs sm:text-sm font-semibold flex items-center justify-center gap-2.5 transition-colors">
                        <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#EA4335" d="M12 5c1.6 0 3 .6 4.1 1.6l3.1-3.1C17.3 1.7 14.8 1 12 1 7.4 1 3.5 3.6 1.6 7.4l3.7 2.8C6.2 7.2 8.9 5 12 5z"/><path fill="#4285F4" d="M23.5 12.3c0-.8-.1-1.6-.2-2.3H12v4.5h6.5c-.3 1.5-1.1 2.8-2.4 3.6l3.7 2.9c2.2-2 3.7-5 3.7-8.7z"/><path fill="#FBBC05" d="M5.3 14.8c-.2-.7-.4-1.5-.4-2.3s.2-1.6.4-2.3L1.6 7.4C.6 9.4 0 11.6 0 14s.6 4.6 1.6 6.6l3.7-2.8z"/><path fill="#34A853" d="M12 24c3.2 0 6-1.1 8-3l-3.7-2.9c-1.1.7-2.5 1.2-4.3 1.2-3.1 0-5.8-2.1-6.7-5l-3.7 2.8C3.5 21.4 7.4 24 12 24z"/></svg>
                        <span>Lanjutkan dengan Akun Google</span>
                    </button>
                </div>

                <!-- Bottom Security & Policy Footer -->
                <div class="mt-8 pt-4 border-t border-cream-border flex flex-wrap items-center justify-between gap-2 text-[11px] text-charcoal/55">
                    <span class="flex items-center gap-1.5">
                        <x-icon.halal-stamp class="w-3.5 h-3.5 text-heritage-primary" />
                        Data pribadi terlindungi enkripsi 256-bit
                    </span>
                    <div class="flex items-center gap-3">
                        <a href="#" class="hover:text-charcoal underline">Syarat Ketentuan</a>
                        <span>•</span>
                        <a href="#" class="hover:text-charcoal underline">Privasi</a>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>

<script>
function authApp() {
    return {
        mode: 'login',
        showPassword: false,
        form: {
            name: '',
            identifier: '',
            password: '',
            remember: true
        },
        handleSubmit() {
            if (this.mode === 'login') {
                this.$dispatch('notify', {
                    title: 'Berhasil Masuk!',
                    message: 'Selamat datang kembali di Dimas Ireng Catering.'
                });
            } else {
                this.$dispatch('notify', {
                    title: 'Pendaftaran Berhasil!',
                    message: `Akun atas nama ${this.form.name || 'Pemesan Baru'} siap digunakan.`
                });
            }
        }
    }
}
</script>
@endsection