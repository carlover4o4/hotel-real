<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}">
    <title>Riwayat Booking - HavenStay</title>
</head>
<body>
    @include('nav')
    <main class="page-shell">
        <div class="page-heading"><div><div class="eyebrow">Perjalananmu</div><h1>Riwayat Booking</h1><p>Semua reservasi yang pernah kamu buat ada di sini.</p></div><a href="{{ route('home') }}" class="btn btn-primary">Cari Kamar</a></div>
        @if (session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <section class="hotel-table-wrap">
            <div class="table-responsive">
                <table class="table" id="riwayat">
                    <thead><tr><th>Customer</th><th>Kamar</th><th>Check-in</th><th>Check-out</th><th>Total Harga</th><th>Status</th></tr></thead>
                    <tbody>
                        @foreach ($reservations as $item)
                        <tr><td>{{ $item->customer->name }}</td><td>{{ $item->room->name }}</td><td>{{ $item->checkin }}</td><td>{{ $item->checkout }}</td><td>Rp{{ number_format($item->total_harga,0,',','.') }}</td><td><span class="room-type">{{ ucfirst($item->status) }}</span></td></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script><script src="{{ asset('js/dataTables.min.js') }}"></script><script>new DataTable('#riwayat');</script>
</body>
</html>