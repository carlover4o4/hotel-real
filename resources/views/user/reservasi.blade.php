<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Kamar - HavenStay</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}">
</head>
<body>
@include('nav')
@php $lama = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24); $total = $type->harga * $lama; @endphp
<main class="page-shell">
    <div class="page-heading"><div><div class="eyebrow">Satu langkah lagi</div><h1>Konfirmasi Reservasi</h1><p>Lengkapi data berikut untuk melanjutkan pemesanan kamar.</p></div></div>
    <div class="row g-4">
        <div class="col-lg-5">
            <article class="hotel-card">
                <img src="{{ asset('storage/'.$type->foto) }}" class="room-photo" style="height:270px" alt="Foto {{ $type->name }}">
                <div class="card-body">
                    <span class="room-type">{{ $type->name }}</span><h3 class="mt-3">{{ $room->name }}</h3>
                    <p class="room-description">{{ $type->deskripsi }}</p><p class="room-description"><strong>Fasilitas:</strong> {{ $type->fasilitas }}</p>
                    <div class="room-price">Rp{{ number_format($type->harga,0,',','.') }} <small class="muted fw-normal">/ malam</small></div>
                </div>
            </article>
            <div class="booking-summary mt-3">
                <div class="eyebrow">Ringkasan menginap</div>
                <div class="d-flex justify-content-between mb-2"><span>Check-in</span><strong>{{ $checkin }}</strong></div>
                <div class="d-flex justify-content-between mb-2"><span>Check-out</span><strong>{{ $checkout }}</strong></div>
                <div class="d-flex justify-content-between mb-2"><span>Durasi</span><strong>{{ $lama }} malam</strong></div>
                <hr><div class="d-flex justify-content-between"><strong>Total</strong><h4 class="mb-0">Rp{{ number_format($total,0,',','.') }}</h4></div>
            </div>
        </div>
        <div class="col-lg-7">
            <section class="hotel-form">
                <form action="{{ route('booking') }}" method="POST">@csrf
                    <input type="hidden" name="room_id" value="{{ $room->id }}">
                    <div class="section-label">Informasi Tamu</div>
                    <div class="mb-3"><label>Nama Lengkap</label><input type="text" name="name" class="form-control" required></div>
                    <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
                    <div class="row">
                        <div class="col-md-6 mb-3"><label>Nomor HP</label><input type="text" name="no_hp" class="form-control" required></div>
                        <div class="col-md-6 mb-3"><label>Nomor Identitas</label><input type="text" name="no_identitas" class="form-control" required></div>
                    </div>
                    <div class="mb-3"><label>Alamat</label><textarea name="alamat" class="form-control" rows="3" required></textarea></div>
                    <div class="section-label mt-4">Detail Reservasi</div>
                    <div class="row">
                        <div class="col-md-6 mb-3"><label>Check-in</label><input type="date" name="checkin" class="form-control" value="{{ $checkin }}" readonly></div>
                        <div class="col-md-6 mb-3"><label>Check-out</label><input type="date" name="checkout" class="form-control" value="{{ $checkout }}" readonly></div>
                    </div>
                    <div class="mb-3"><label>Total Harga</label><input type="text" class="form-control fw-bold" value="Rp{{ number_format($total,0,',','.') }}" readonly></div>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        @if($sudahDipesan)<button type="button" class="btn btn-secondary" disabled>Sudah Terisi</button>@else<button type="submit" class="btn btn-primary">Konfirmasi Booking</button>@endif
                        <a href="{{ route('home') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </section>
        </div>
    </div>
</main>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>