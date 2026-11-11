<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Edit Kamar - HavenStay</title><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}"></head>
<body>@include('nav')
<main class="page-shell"><div class="page-heading"><div><div class="eyebrow">Pengelolaan properti</div><h1>Edit Kamar</h1><p>Perbarui nama dan tipe kamar yang dipilih.</p></div></div>
<section class="hotel-form" style="max-width:680px"><form action="{{ route('postedit', $room->id) }}" method="POST">@csrf
    <div class="mb-3"><label>Nama Kamar</label><input type="text" name="name" value="{{ $room->name }}" class="form-control" required></div>
    <div class="mb-4"><label>Tipe Kamar</label><select name="type_id" class="form-select" required><option value="">Pilih Tipe</option>@foreach ($type as $t)<option value="{{ $t->id }}" {{ $room->type_id == $t->id ? 'selected' : '' }}>{{ $t->name }}</option>@endforeach</select></div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button> <a href="{{ route('rooma') }}" class="btn btn-secondary">Kembali</a>
</form></section></main><script src="{{ asset('js/bootstrap.bundle.js') }}"></script></body></html>