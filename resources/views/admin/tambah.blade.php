
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Tambah Room</title>
</head>
<body>

    @include('nav')

    <div class="container mt-5 mb-5">
        <div class="card shadow p-4">

            <h3>Tambah Room</h3>

            <form action="{{ route('posttambah') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Kamar</label>
                    <input type="text" name="name" class="form-control"
                        placeholder="Masukkan nama kamar" required>
                </div>

                <div class="mb-3">
                    <label>Type Kamar</label>
                    <select name="type_id" class="form-control" required>
                        <option value="">Pilih Type Kamar</option>
                        @foreach ($type as $t)
                            <option value="{{ $t->id }}">
                                {{ $t->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('rooma') }}" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</body>
</html>


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow p-4" style="width: 50rem;">
            <form action="{{ route('posttambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card- text d-flex justify-content-center"  >
                    <h3>Tambah</h3>
                </div>
                <div class="mb-3">
                    <div class="form-label">Nama Kamar</div>
                        <input type="name" name="name" placeholder="" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-label">Harga</div>
                        <input type="numeric" name="harga" placeholder="" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-label">Deskripsi</div>
                        <input type="text" name="deskripsi" placeholder="" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-label">Type Kamar</div>
                    <select name="type" id="" class="form-control">
                        <option value="">Pilih Type</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="Superrior">Superrior</option>
                        <option value="Standard">Standard</option>
                </div>
                <div class="mb-3">
                    <div class="form-label">Foto</div>
                        <input type="file" name="foto" accept="image/*" placeholder="" class="form-control">
                </div>
                <div class="mb-3">
                    <div class="form-label">Fasilitas</div>
                        <input type="text" name="fasilitas" placeholder="" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah</button>
               <a href="{{ route('adminhome') }}" class="btn btn-secondary">kembali</a>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>
</html> --}}