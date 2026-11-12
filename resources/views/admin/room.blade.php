<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}">
    <title>Data Kamar - HavenStay</title>
</head>
<body>
    @include('nav')
    <main class="page-shell">
        <div class="page-heading"><div><div class="eyebrow">Pengelolaan properti</div><h1>Data Kamar</h1><p>Atur informasi, ketersediaan, dan detail setiap kamar.</p></div><a href="{{ route('tambah') }}" class="btn btn-primary">+ Tambah Kamar</a></div>
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <section class="hotel-table-wrap">
            <div class="table-responsive">
                <table class="table" id="room">
                    <thead><tr><th>No</th><th>Nama Kamar</th><th>Harga</th><th>Tipe</th><th>Deskripsi</th><th>Fasilitas</th><th>Foto</th><th>Status</th><th>Aksi</th></tr></thead>
                    <tbody>
                        @foreach ($room as $c)
                        @php $reservasi = $c->reservations->sortByDesc('id')->first(); @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td><td>{{ $c->name }}</td><td>Rp{{ number_format($c->type->harga,0,',','.') }}</td><td>{{ $c->type->name }}</td><td>{{ $c->type->deskripsi }}</td><td>{{ $c->type->fasilitas }}</td>
                            <td><img src="{{ asset('storage/'.$c->type->foto) }}" width="88" height="62" style="object-fit:cover;border-radius:9px" alt="Foto Kamar"></td>
                            <td>
                                @if ($reservasi)
                                    <form action="{{ route('poststatus', $reservasi->id) }}" method="POST">@csrf
                                        <select name="status" class="status-badge-select {{ $reservasi->status == 'terisi' ? 'status-terisi' : 'status-kosong' }}" onchange="this.form.submit()" aria-label="Ubah status kamar">
                                            <option value="kosong" {{ $reservasi->status == 'kosong' ? 'selected' : '' }}>Kosong</option>
                                            <option value="terisi" {{ $reservasi->status == 'terisi' ? 'selected' : '' }}>Terisi</option>
                                        </select>
                                    </form>
                                @else<span class="badge text-bg-success">Kosong</span>@endif
                            </td>
                            <td class="text-nowrap">
                                @if (!$reservasi || $reservasi->status == 'kosong')<a href="{{ route('edit', $c->id) }}" class="btn btn-warning btn-sm">Edit</a>@else<button class="btn btn-warning btn-sm" disabled>Edit</button>@endif
                                <a href="{{ route('hapus', $c->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus kamar ini?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script><script src="{{ asset('js/dataTables.min.js') }}"></script><script>new DataTable('#room');</script>
</body>
</html>