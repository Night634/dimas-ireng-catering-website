@extends('layouts.app')

@section('title', 'Masuk atau Daftar — Dimas Ireng Catering')

@section('content')
<main class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <a href="{{ route('home') }}" class="inline-flex items-center gap-2 text-sm font-medium text-stone-600 hover:text-gold-dark transition-colors">
            <span aria-hidden="true">&larr;</span>
            Kembali ke beranda
        </a>

        <section x-data="{ mode: 'login' }" class="mt-6 rounded-3xl border border-[#EAE4D7] bg-white p-6 shadow-xl sm:p-8">
            <div class="text-center">
                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-br from-gold to-gold-dark font-serif text-lg font-bold text-white shadow-sm">
                    DI
                </div>
                <h1 class="mt-4 font-serif text-2xl font-bold text-charcoal">Selamat datang</h1>
                <p class="mt-2 text-sm text-stone-500">Masuk atau buat akun Dimas Ireng Catering.</p>
            </div>

            <div class="mt-6 grid grid-cols-2 rounded-xl bg-ivory p-1" role="tablist" aria-label="Pilih masuk atau daftar">
                <button type="button" @click="mode = 'login'" :aria-selected="mode === 'login'" role="tab" class="rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors" :class="mode === 'login' ? 'bg-white text-charcoal shadow-sm' : 'text-stone-500'">
                    Masuk
                </button>
                <button type="button" @click="mode = 'register'" :aria-selected="mode === 'register'" role="tab" class="rounded-lg px-3 py-2.5 text-sm font-semibold transition-colors" :class="mode === 'register' ? 'bg-white text-charcoal shadow-sm' : 'text-stone-500'">
                    Daftar
                </button>
            </div>

            <form class="mt-6 space-y-4" @submit.prevent>
                <div x-show="mode === 'register'">
                    <label for="name" class="mb-1.5 block text-sm font-medium text-stone-700">Nama</label>
                    <input id="name" name="name" type="text" autocomplete="name" :required="mode === 'register'" class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-gold-dark focus:ring-2 focus:ring-gold/20">
                </div>

                <div>
                    <label for="email" class="mb-1.5 block text-sm font-medium text-stone-700">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-gold-dark focus:ring-2 focus:ring-gold/20">
                </div>

                <div>
                    <label for="password" class="mb-1.5 block text-sm font-medium text-stone-700">Kata sandi</label>
                    <input id="password" name="password" type="password" :autocomplete="mode === 'login' ? 'current-password' : 'new-password'" required class="w-full rounded-xl border border-stone-300 px-4 py-3 text-sm outline-none transition focus:border-gold-dark focus:ring-2 focus:ring-gold/20">
                </div>

                <button type="button" disabled class="w-full cursor-not-allowed rounded-xl bg-charcoal px-4 py-3 text-sm font-semibold text-white opacity-60">
                    <span x-text="mode === 'login' ? 'Masuk' : 'Buat akun'"></span>
                </button>
            </form>

            <p class="mt-4 rounded-xl bg-gold-light px-4 py-3 text-center text-xs leading-relaxed text-gold-deep">
                Tampilan akun masih dalam tahap persiapan. Masuk dan pendaftaran belum tersedia.
            </p>
        </section>
    </div>
</main>
@endsection
