<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}">
    <title>HavenStay - Jelajahi Kamar</title>
</head>
<body>
    @include('nav')
    <main class="page-shell">
        <section class="hotel-hero">
            <div class="hero-copy">
                <div class="eyebrow">Stay a little better</div>
                <h1>Tempat nyaman untuk cerita berikutnya.</h1>
                <p>Pilih kamar yang pas, atur tanggal menginap, dan nikmati pengalaman menginap yang lebih mudah.</p>
            </div>
        </section>
        @include('user.filter')
        <div class="page-heading">
            <div>
                <div class="eyebrow">{{ request('checkin') && request('checkout') ? 'Pilihan sesuai tanggal' : 'Pilihan menginap' }}</div>
                <h1>{{ request('checkin') && request('checkout') ? 'Kamar tersedia' : 'Jelajahi kamar' }}</h1>
                <p>{{ request('checkin') && request('checkout') ? 'Berikut kamar yang bisa kamu pesan pada tanggal pilihan.' : 'Temukan ruang istirahat yang sesuai dengan kebutuhanmu.' }}</p>
            </div>
        </div>
        <div class="room-grid">
            @if(request('checkin') && request('checkout'))
                @foreach ($type as $t)
                    @foreach ($t->room as $r)
                        <article class="hotel-card">
                            <img class="room-photo" src="{{ asset('storage/'.$t->foto) }}" alt="Foto {{ $t->name }}">
                            <div class="card-body">
                                <span class="room-type">{{ $t->name }}</span>
                                <h3 class="mt-3 mb-2">{{ $r->name }}</h3>
                                <div class="room-price mb-2">Rp{{ number_format($t->harga, 0, ',', '.') }} <small class="muted fw-normal">/ malam</small></div>
                                <p class="room-description">{{ $t->deskripsi }}</p>
                                <p class="room-description"><strong>Fasilitas:</strong> {{ $t->fasilitas }}</p>
                                <a href="{{ route('reservasi', $r->id) }}?checkin={{ request('checkin') }}&checkout={{ request('checkout') }}" class="btn btn-primary w-100 mt-2">Pilih Kamar</a>
                            </div>
                        </article>
                    @endforeach
                @endforeach
                @if($type->sum(fn($t) => $t->room->count()) == 0)
                    <div class="empty-state">Belum ada kamar tersedia untuk tanggal tersebut. Coba tanggal lain, ya.</div>
                @endif
            @else
                @foreach ($type as $t)
                    <article class="hotel-card">
                        <img class="room-photo" src="{{ asset('storage/'.$t->foto) }}" alt="Foto {{ $t->name }}">
                        <div class="card-body">
                            <span class="room-type">Pilihan kamar</span>
                            <h3 class="mt-3 mb-2">{{ $t->name }}</h3>
                            <div class="room-price mb-2">Rp{{ number_format($t->harga, 0, ',', '.') }} <small class="muted fw-normal">/ malam</small></div>
                            <p class="room-description">{{ $t->deskripsi }}</p>
                            <p class="room-description"><strong>Fasilitas:</strong> {{ $t->fasilitas }}</p>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </main>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html>