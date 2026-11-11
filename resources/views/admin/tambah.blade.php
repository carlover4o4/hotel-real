<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Tambah Kamar - HavenStay</title><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}"></head>
<body>@include('nav')
<main class="page-shell"><div class="page-heading"><div><div class="eyebrow">Pengelolaan properti</div><h1>Tambah Kamar</h1><p>Tambahkan kamar baru ke daftar properti.</p></div></div>
<section class="hotel-form" style="max-width:680px"><form action="{{ route('posttambah') }}" method="POST">@csrf
    <div class="mb-3"><label>Nama Kamar</label><input type="text" name="name" class="form-control" placeholder="Contoh: Kamar 101" required></div>
    <div class="mb-4"><label>Tipe Kamar</label><select name="type_id" class="form-select" required><option value="">Pilih Tipe Kamar</option>@foreach ($type as $t)<option value="{{ $t->id }}">{{ $t->name }}</option>@endforeach</select></div>
    <button type="submit" class="btn btn-primary">Simpan Kamar</button> <a href="{{ route('rooma') }}" class="btn btn-secondary">Kembali</a>
</form></section></main><script src="{{ asset('js/bootstrap.bundle.js') }}"></script></body></html>