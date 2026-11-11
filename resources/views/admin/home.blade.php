<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}">
    <title>Dashboard Admin - HavenStay</title>
</head>
<body>
    @include('nav')
    <main class="page-shell">
        <div class="page-heading">
            <div><div class="eyebrow">Ringkasan pengelolaan</div><h1>Dashboard</h1><p>Pantau reservasi tamu dan informasi kunjungan terbaru.</p></div>
        </div>
        <section class="hotel-hero">
            <div class="hero-copy"><div class="eyebrow">HavenStay / Admin</div><h1>Kelola pengalaman menginap.</h1><p>Periksa data reservasi dan pastikan setiap tamu mendapatkan pelayanan terbaik.</p></div>
        </section>
        <section class="hotel-table-wrap">
            <div class="page-heading mb-3"><div><div class="eyebrow">Data tamu</div><h1 style="font-size:24px">Daftar Reservasi</h1></div></div>
            <div class="table-responsive">
                <table class="table" id="homeadmin">
                    <thead><tr><th>No</th><th>Nama Tamu</th><th>No. Telepon</th><th>No. Identitas</th><th>Email</th><th>Check-in</th><th>Check-out</th><th>Total Harga</th></tr></thead>
                    <tbody>
                        @foreach ($reservation as $c)
                        <tr><td>{{$loop->iteration}}</td><td>{{$c->customer->name}}</td><td>{{$c->customer->no_hp}}</td><td>{{$c->customer->no_identitas}}</td><td>{{$c->customer->email}}</td><td>{{$c->checkin}}</td><td>{{$c->checkout}}</td><td>Rp{{number_format($c->total_harga,0,',','.')}}</td></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script><script src="{{ asset('js/dataTables.min.js') }}"></script><script>new DataTable('#homeadmin');</script>
</body>
</html>