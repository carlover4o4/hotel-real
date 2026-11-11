<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Detail Kamar - HavenStay</title><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}"></head>
<body>
@include('nav')
<main class="page-shell">
    <div class="page-heading"><div><div class="eyebrow">Detail akomodasi</div><h1>{{ $room->name }}</h1><p>Lihat informasi kamar sebelum melanjutkan pemesanan.</p></div><a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a></div>
    <div class="row g-4">
        <div class="col-lg-7"><article class="hotel-card"><img src="{{ asset('storage/'. $room->foto) }}" alt="Foto {{ $room->name }}" class="room-photo" style="height:430px"></article></div>
        <div class="col-lg-5"><section class="hotel-form">
            <span class="room-type">{{ $room->type }}</span><h2 class="mt-3" style="color:var(--sangria);font-weight:800">{{ $room->name }}</h2>
            <div class="room-price my-3">Rp{{ number_format($room->harga,0,',','.') }} <small class="muted fw-normal">/ malam</small></div>
            <div class="section-label">Deskripsi</div><p class="room-description">{{ $room->deskripsi }}</p>
            <div class="section-label">Fasilitas Tersedia</div><p class="room-description">{{ $room->fasilitas }}</p>
            <a href="{{ route('reservasi', $room->id) }}" class="btn btn-primary w-100 mt-3">Booking Sekarang</a>
        </section></div>
    </div>
</main>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script></body></html>