@extends('layouts.app')

@section('title', 'Keranjang & Konfirmasi Pengantaran — Dimas Ireng Catering')

@section('content')
<div x-data="checkoutApp()" class="min-h-screen flex flex-col bg-parchment">

    <!-- Top Header -->
    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-cream-border">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 sm:h-20 flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                <div class="w-10 h-10 rounded-full border border-gold flex items-center justify-center p-0.5 bg-cream">
                    <div class="w-full h-full rounded-full border border-gold/60 flex items-center justify-center font-serif font-bold text-sm text-heritage-primary">
                        DI
                    </div>
                </div>
                <div>
                    <span class="font-serif font-bold text-base sm:text-lg text-charcoal block leading-none">Dimas Ireng</span>
                    <span class="text-[10px] font-bold uppercase tracking-[0.14em] text-heritage-primary mt-1 block">Nusantara Heritage</span>
                </div>
            </a>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}" class="text-xs sm:text-sm font-semibold text-charcoal/75 hover:text-heritage-primary transition-colors">
                    ← Kembali ke Katalog
                </a>
                <a href="{{ route('auth') }}" class="h-10 px-4 rounded-xl bg-cream border border-cream-border hover:border-gold text-xs font-bold text-charcoal flex items-center justify-center transition-colors">
                    Masuk
                </a>
            </div>
        </div>
    </header>

    <!-- Page Title & Stepper -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12 w-full flex-1">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-8 border-b border-cream-border">
            <div>
                <span class="text-xs font-bold uppercase tracking-widest text-heritage-primary">Tahap 01 dari 02 • Pesanan Anda</span>
                <h1 class="font-serif text-2xl sm:text-3xl lg:text-4xl font-bold text-charcoal mt-1">Keranjang & Konfirmasi Pengantaran</h1>
            </div>

            <div class="flex items-center gap-2 text-xs font-bold">
                <span class="px-3.5 py-2 rounded-full bg-gold-amber text-charcoal">1. Periksa Pesanan</span>
                <span class="text-charcoal/30">•••</span>
                <span class="px-3.5 py-2 rounded-full bg-white border border-cream-border text-charcoal/50">2. Selesaikan Pembayaran</span>
            </div>
        </div>

        <!-- 2-Column Checkout Layout -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mt-8 items-start">

            <!-- LEFT COLUMN (7 Cols): Slot, Itemized List, Customer Form, Payment Method -->
            <div class="lg:col-span-7 space-y-6">

                <!-- 1. Verified Event Slot Banner -->
                <div class="rounded-2xl bg-cream border border-cream-border p-5 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div class="flex items-start gap-3.5">
                        <div class="w-11 h-11 rounded-xl bg-gold-amber text-charcoal flex items-center justify-center shrink-0">
                            <x-icon.armada-box class="w-5 h-5 text-charcoal" />
                        </div>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary">Slot Acara Terverifikasi</span>
                            <p class="font-serif font-bold text-lg text-charcoal mt-0.5" x-text="scheduleText"></p>
                            <p class="text-xs text-charcoal/70 mt-0.5">Jaminan tiba 45 menit sebelum waktu santap dimulai.</p>
                        </div>
                    </div>
                    <button @click="editingSchedule = !editingSchedule" class="self-start sm:self-center px-3.5 py-2 rounded-xl bg-white border border-cream-border hover:border-gold text-xs font-bold text-charcoal transition-colors">
                        Ubah Jadwal
                    </button>
                </div>

                <!-- Inline Schedule Editor -->
                <div x-show="editingSchedule" x-collapse x-cloak class="rounded-2xl bg-white border border-cream-border p-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-charcoal mb-1.5">Tanggal Acara</label>
                        <input type="date" x-model="eventDate" class="w-full h-11 px-3.5 rounded-xl bg-parchment border border-cream-border text-sm">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-charcoal mb-1.5">Jam Pengiriman</label>
                        <select x-model="eventTime" class="w-full h-11 px-3.5 rounded-xl bg-parchment border border-cream-border text-sm">
                            <option value="10:00 WIB Pagi">10:00 WIB Pagi</option>
                            <option value="12:00 WIB Siang">12:00 WIB Siang</option>
                            <option value="18:30 WIB Malam">18:30 WIB Malam</option>
                        </select>
                    </div>
                </div>

                <!-- 2. Daftar Sajian Pilihan -->
                <section class="rounded-2xl bg-white border border-cream-border p-6">
                    <div class="flex items-center justify-between mb-5">
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary">Rincian Hidangan</span>
                            <h2 class="font-serif font-bold text-xl text-charcoal">Daftar Sajian Pilihan</h2>
                        </div>
                        <span class="px-3 py-1 rounded-full bg-cream border border-cream-border text-xs font-bold text-charcoal" x-text="items.length + ' Menu Berbeda'"></span>
                    </div>

                    <div class="space-y-4">
                        <template x-for="(item, idx) in items" :key="item.id">
                            <div class="p-4 rounded-2xl bg-parchment border border-cream-border flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div class="flex items-start gap-3.5">
                                    <img :src="item.image" :alt="item.name" class="w-16 h-16 rounded-xl object-cover shrink-0">
                                    <div>
                                        <span class="inline-block px-2.5 py-0.5 rounded-full bg-gold-amber/25 text-heritage-primary text-[10px] font-bold uppercase tracking-wider" x-text="item.badge"></span>
                                        <h3 class="font-serif font-bold text-base text-charcoal mt-1" x-text="item.name"></h3>
                                        <p class="text-xs text-charcoal/70 mt-0.5" x-text="item.variant"></p>
                                        <p x-show="item.notes" class="mt-1.5 inline-block px-2.5 py-0.5 rounded-lg bg-white border border-cream-border text-[11px] text-charcoal/75 italic" x-text="'Catatan: ' + item.notes"></p>
                                    </div>
                                </div>

                                <div class="flex sm:flex-col items-center sm:items-end justify-between border-t sm:border-t-0 pt-3 sm:pt-0 border-cream-border">
                                    <span class="font-bold text-base text-charcoal" x-text="formatRupiah(item.price * item.qty)"></span>
                                    <div class="flex items-center gap-2 mt-1">
                                        <div class="inline-flex items-center rounded-xl bg-white border border-cream-border p-0.5">
                                            <button type="button" @click="updateQty(idx, -1)" class="w-7 h-7 rounded-lg hover:bg-cream text-xs font-bold">-</button>
                                            <span class="px-2.5 text-xs font-bold" x-text="item.qty"></span>
                                            <button type="button" @click="updateQty(idx, 1)" class="w-7 h-7 rounded-lg hover:bg-cream text-xs font-bold">+</button>
                                        </div>
                                        <button type="button" @click="removeItem(idx)" class="text-xs text-rose-600 hover:underline font-medium ml-1">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </section>

                <!-- 3. Data Pemesan & Lokasi Pengantaran -->
                <section class="rounded-2xl bg-white border border-cream-border p-6 space-y-5">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary">Informasi Penanggung Jawab</span>
                        <h2 class="font-serif font-bold text-xl text-charcoal">Data Pemesan & Lokasi Pengantaran</h2>
                    </div>

                    <div class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Nama Lengkap Pemesan / Instansi <span class="text-rose-600">*</span></label>
                            <input type="text" x-model="customer.name" class="w-full h-12 px-4 rounded-xl bg-parchment border border-cream-border text-sm font-medium focus:outline-none focus:border-gold">
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-charcoal mb-1.5">Nomor WhatsApp Aktif <span class="text-rose-600">*</span></label>
                                <input type="tel" x-model="customer.phone" class="w-full h-12 px-4 rounded-xl bg-parchment border border-cream-border text-sm font-medium focus:outline-none focus:border-gold">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-charcoal mb-1.5">Alamat Email Resmi</label>
                                <input type="email" x-model="customer.email" class="w-full h-12 px-4 rounded-xl bg-parchment border border-cream-border text-sm font-medium focus:outline-none focus:border-gold">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Alamat Lengkap Acara / Gedung / Rumah <span class="text-rose-600">*</span></label>
                            <textarea rows="2" x-model="customer.address" class="w-full p-3.5 rounded-xl bg-parchment border border-cream-border text-sm leading-relaxed focus:outline-none focus:border-gold"></textarea>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-charcoal mb-1.5">Panduan Kurir & Pintu Bongkar Muat</label>
                            <input type="text" x-model="customer.landmark" class="w-full h-12 px-4 rounded-xl bg-parchment border border-cream-border text-sm focus:outline-none focus:border-gold">
                        </div>
                    </div>
                </section>

                <!-- 4. Skema Pembayaran -->
                <section class="rounded-2xl bg-white border border-cream-border p-6 space-y-4">
                    <div>
                        <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary">Skema Pembayaran</span>
                        <h2 class="font-serif font-bold text-xl text-charcoal">Pilih Metode Transaksi</h2>
                    </div>

                    <div class="space-y-3">
                        <label @click="paymentMethod = 'va'" :class="paymentMethod === 'va' ? 'bg-cream border-gold' : 'bg-parchment border-cream-border'"
                               class="block p-4 rounded-2xl border cursor-pointer transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="payment" value="va" x-model="paymentMethod" class="text-gold-amber focus:ring-gold">
                                    <span class="font-bold text-sm text-charcoal">Transfer Bank Otomatis (Virtual Account)</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-gold-amber/30 text-heritage-primary text-[10px] font-bold uppercase">Verifikasi Cepat</span>
                            </div>
                            <p class="text-xs text-charcoal/70 mt-1.5 pl-7">Mendukung BCA, Bank Mandiri, BNI, dan BRI. Konfirmasi otomatis tanpa unggah struk manual.</p>
                        </label>

                        <label @click="paymentMethod = 'qris'" :class="paymentMethod === 'qris' ? 'bg-cream border-gold' : 'bg-parchment border-cream-border'"
                               class="block p-4 rounded-2xl border cursor-pointer transition-colors">
                            <div class="flex items-center gap-3">
                                <input type="radio" name="payment" value="qris" x-model="paymentMethod" class="text-gold-amber focus:ring-gold">
                                <span class="font-bold text-sm text-charcoal">QRIS / Dompet Digital</span>
                            </div>
                            <p class="text-xs text-charcoal/70 mt-1.5 pl-7">Pindai langsung via GoPay, OVO, ShopeePay, DANA, dan seluruh Mobile Banking.</p>
                        </label>

                        <label @click="paymentMethod = 'dp'" :class="paymentMethod === 'dp' ? 'bg-cream border-gold' : 'bg-parchment border-cream-border'"
                               class="block p-4 rounded-2xl border cursor-pointer transition-colors">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-3">
                                    <input type="radio" name="payment" value="dp" x-model="paymentMethod" class="text-gold-amber focus:ring-gold">
                                    <span class="font-bold text-sm text-charcoal">Invoice Termin: Uang Muka (DP) 50%</span>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-white border border-cream-border text-heritage-primary text-[10px] font-bold uppercase">Khusus Hajatan</span>
                            </div>
                            <p class="text-xs text-charcoal/70 mt-1.5 pl-7">
                                Bayar DP <strong class="text-charcoal" x-text="formatRupiah(Math.round(grandTotal / 2))"></strong> hari ini untuk mengunci slot dapur & armada. Sisa pelunasan H-1 acara.
                            </p>
                        </label>
                    </div>
                </section>
            </div>

            <!-- RIGHT COLUMN (5 Cols): Sticky Summary & Guarantees -->
            <div class="lg:col-span-5 space-y-6 lg:sticky lg:top-24">
                <div class="rounded-2xl bg-white border border-cream-border p-6 shadow-ambient space-y-5">
                    <div class="flex items-center justify-between pb-4 border-b border-cream-border">
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary">Ringkasan Biaya</span>
                            <h2 class="font-serif font-bold text-xl text-charcoal">Total Pesanan</h2>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-cream border border-cream-border flex items-center justify-center">
                            <x-icon.bento-box class="w-5 h-5 text-heritage-primary" />
                        </div>
                    </div>

                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between text-charcoal/75">
                            <span x-text="'Subtotal Menu (' + totalPax + ' Kotak/Pax)'"></span>
                            <span class="font-semibold text-charcoal" x-text="formatRupiah(subtotal)"></span>
                        </div>
                        <div class="flex justify-between text-charcoal/75">
                            <span>Pengiriman Armada Bersegel</span>
                            <span class="font-semibold text-charcoal" x-text="formatRupiah(shippingFee)"></span>
                        </div>
                        <div class="flex justify-between text-charcoal/75">
                            <span>Kemasan Higienis & Cutlery Set</span>
                            <span class="font-bold text-emerald-700">GRATIS</span>
                        </div>
                        <div x-show="discount > 0" class="flex justify-between text-emerald-700 font-semibold">
                            <span>Potongan Voucher Hajatan</span>
                            <span x-text="'- ' + formatRupiah(discount)"></span>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-cream-border flex items-baseline justify-between">
                        <div>
                            <span class="font-bold text-sm text-charcoal block">Total Pembayaran</span>
                            <span class="text-[11px] text-charcoal/55">Sudah termasuk PPN & pengemasan</span>
                        </div>
                        <span class="font-serif text-2xl sm:text-3xl font-bold text-heritage-primary" x-text="formatRupiah(grandTotal)"></span>
                    </div>

                    <!-- Voucher Input -->
                    <div class="pt-2">
                        <label class="block text-xs font-bold text-charcoal mb-1.5">Punya Kode Voucher Katering?</label>
                        <div class="flex gap-2">
                            <input type="text" x-model="voucherCode" placeholder="CONTOH: BERKAHHAJATAN" class="flex-1 h-11 px-3.5 rounded-xl bg-parchment border border-cream-border text-xs font-semibold uppercase focus:outline-none focus:border-gold">
                            <button type="button" @click="applyVoucher()" class="px-4 h-11 rounded-xl bg-cream hover:bg-gold-amber border border-cream-border text-xs font-bold text-charcoal transition-colors">
                                Terapkan
                            </button>
                        </div>
                    </div>

                    <!-- Primary & WA Actions -->
                    <div class="space-y-2.5 pt-2">
                        <button type="button" @click="submitOrder()" class="w-full h-12 rounded-xl bg-gold-amber hover:bg-gold text-charcoal text-xs font-bold uppercase tracking-wider flex items-center justify-center gap-2 shadow-xs transition-all active:scale-[0.98]">
                            <span>Konfirmasi & Lanjut Pembayaran</span>
                            <span>→</span>
                        </button>
                        <button type="button" @click="checkoutWhatsApp()" class="w-full h-11 rounded-xl bg-white hover:bg-cream border border-cream-border text-charcoal text-xs font-bold flex items-center justify-center gap-2 transition-colors">
                            <span>Pesan via WhatsApp dengan Draft Ini</span>
                        </button>
                    </div>
                </div>

                <!-- Service Guarantees Box -->
                <div class="rounded-2xl bg-cream border border-cream-border p-6 space-y-4">
                    <span class="text-[11px] font-bold uppercase tracking-wider text-heritage-primary block">Jaminan Layanan Dimas Ireng</span>
                    <div class="flex items-start gap-3">
                        <x-icon.armada-box class="w-5 h-5 text-heritage-primary shrink-0 mt-0.5" />
                        <div>
                            <h4 class="font-bold text-xs text-charcoal">Garansi Tepat Waktu 45 Menit</h4>
                            <p class="text-xs text-charcoal/70 mt-0.5 leading-relaxed">Armada tiba di lokasi minimal 45 menit sebelum waktu hajatan dimulai.</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-3">
                        <x-icon.halal-stamp class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" />
                        <div>
                            <h4 class="font-bold text-xs text-charcoal">100% Halal LPPOM MUI</h4>
                            <p class="text-xs text-charcoal/70 mt-0.5 leading-relaxed">Seluruh daging, rempah marinasi, dan bahan pendukung memiliki legalitas halal murni.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
function checkoutApp() {
    return {
        editingSchedule: false,
        eventDate: '2026-11-18',
        eventTime: '12:00 WIB Siang',
        paymentMethod: 'va',
        voucherCode: '',
        discount: 0,
        shippingFee: 35000,
        customer: {
            name: 'Raden Arya Kusuma',
            phone: '0812-9843-2210',
            email: 'arya.kusuma@mitraindonesia.co.id',
            address: 'Gedung Graha Niaga Utama, Ruang Puri Kencana Lantai 3, Jl. Jend. Sudirman Kav. 58, Senayan, Jakarta Selatan',
            landmark: 'Lantai 3 Gedung Serbaguna - Masuk melalui Loading Dock B Selatan'
        },
        items: [
            {
                id: 1,
                badge: 'Terlaris',
                name: 'Bento Nasi Kuning Istimewa',
                variant: 'Pilihan Nasi Kuning Gurih, Ayam Suwir Ketumbar, Telur Balado, Tempe Orek',
                notes: 'Sambal dipisah',
                price: 29500,
                qty: 5,
                image: 'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=400&q=80'
            },
            {
                id: 2,
                badge: 'Resep Pusaka',
                name: 'Nasi Box Ayam Bakar Madu Ireng',
                variant: 'Pilihan Nasi Putih Wangi Daun Pandan, Sambal Bajak Ireng, Tahu/Tempe Bacem',
                notes: '',
                price: 32000,
                qty: 10,
                image: 'https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=400&q=80'
            },
            {
                id: 3,
                badge: 'Kemasan Mika',
                name: 'Tumpeng Mini Syukuran Berkah',
                variant: 'Pilihan Nasi Gurih Santan, Urap Sayur Rempah, Ayam Goreng Lengkuas',
                notes: '',
                price: 38000,
                qty: 2,
                image: 'https://images.unsplash.com/photo-1512058564366-18510be2db19?auto=format&fit=crop&w=400&q=80'
            }
        ],
        get scheduleText() {
            return `${this.eventDate} • Pukul ${this.eventTime}`;
        },
        get totalPax() {
            return this.items.reduce((s, i) => s + i.qty, 0);
        },
        get subtotal() {
            return this.items.reduce((s, i) => s + (i.price * i.qty), 0);
        },
        get grandTotal() {
            return Math.max(0, this.subtotal + this.shippingFee - this.discount);
        },
        updateQty(index, delta) {
            if (this.items[index].qty + delta >= 1) {
                this.items[index].qty += delta;
                this.$dispatch('notify', {
                    title: 'Jumlah Porsi Diperbarui',
                    message: `${this.items[index].name} kini ${this.items[index].qty} pax.`
                });
            }
        },
        removeItem(index) {
            const removed = this.items[index];
            this.items.splice(index, 1);
            this.$dispatch('notify', {
                title: 'Hidangan Dihapus',
                message: `${removed.name} dihapus dari ringkasan pesanan.`,
                type: 'warning'
            });
        },
        applyVoucher() {
            if (this.voucherCode.trim().toUpperCase() === 'BERKAHHAJATAN') {
                this.discount = 25000;
                this.$dispatch('notify', {
                    title: 'Voucher Berhasil Diterapkan!',
                    message: 'Potongan Rp 25.000 untuk pesanan hajatan Anda.'
                });
            } else {
                this.$dispatch('notify', {
                    title: 'Kode Voucher Tidak Ditemukan',
                    message: 'Coba gunakan kode promo BERKAHHAJATAN.',
                    type: 'warning'
                });
            }
        },
        submitOrder() {
            this.$dispatch('notify', {
                title: 'Pesanan Berhasil Dikonfirmasi!',
                message: 'Kode Booking #DIC-20261119 telah dibuat. Mengarahkan ke instruksi pembayaran...'
            });
        },
        checkoutWhatsApp() {
            let list = this.items.map((i, idx) => `${idx+1}. ${i.name} (${i.qty} Pax) = ${this.formatRupiah(i.price * i.qty)}`).join('%0A');
            let msg = `Halo Dimas Ireng Catering,%0ASaya ingin konfirmasi pesanan:%0ANama: *${this.customer.name}*%0AJadwal: *${this.scheduleText}*%0AAlamat: ${this.customer.address}%0A%0A*Daftar Menu:*%0A${list}%0A%0A*Total Tagihan: ${this.formatRupiah(this.grandTotal)}*`;
            window.open(`https://wa.me/6289673574078?text=${msg}`, '_blank');
        },
        formatRupiah(num) {
            return 'Rp ' + Number(num).toLocaleString('id-ID');
        }
    }
}
</script>
@endsection