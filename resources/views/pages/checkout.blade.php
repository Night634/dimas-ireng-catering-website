@extends('layouts.app')

@section('title', 'Checkout — Dimas Ireng Catering')

@section('content')
<main class="min-h-screen flex items-center justify-center px-4 py-12">
    <section class="w-full max-w-md rounded-3xl border border-[#EAE4D7] bg-white p-8 text-center shadow-xl">
        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-2xl bg-gold-light text-2xl text-gold-dark" aria-hidden="true">
            &#128722;
        </div>
        <h1 class="mt-4 font-serif text-2xl font-bold text-charcoal">Checkout belum tersedia</h1>
        <p class="mt-2 text-sm leading-relaxed text-stone-500">
            Fitur pemesanan online masih dalam tahap persiapan. Silakan kembali ke katalog menu.
        </p>
        <a href="{{ route('home') }}" class="mt-6 inline-flex rounded-xl bg-charcoal px-5 py-3 text-sm font-semibold text-white transition-colors hover:bg-gold-dark">
            Kembali ke beranda
        </a>
    </section>
</main>
@endsection
