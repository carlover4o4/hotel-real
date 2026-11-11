<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Register - HavenStay</title><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}"></head>
<body><main class="auth-page">
    <section class="auth-aside"><div><div class="eyebrow">HavenStay / Join us</div><h1>Mulai rencanakan waktu istirahatmu.</h1><p>Buat akun untuk menjelajahi pilihan kamar dan mengelola reservasi dengan lebih mudah.</p></div><div class="auth-foot eyebrow">Simple stay. Better days.</div></section>
    <section class="auth-main"><div class="auth-card"><div class="eyebrow">Buat akun baru</div><h2>Daftar HavenStay</h2><p class="muted mb-4">Isi detail berikut untuk memulai.</p>
        <form action="{{ route('postregister') }}" method="POST">@csrf
            <div class="mb-3"><label>Nama Lengkap</label><input type="text" name="name" class="form-control" required></div>
            <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
            <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
            <button type="submit" class="btn btn-primary w-100 mt-2">Register</button>
            <p class="muted text-center mt-4 mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="fw-bold">Login</a></p>
        </form>
    </div></section>
</main><script src="{{ asset('js/bootstrap.bundle.js') }}"></script></body></html>