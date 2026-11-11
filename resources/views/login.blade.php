<!DOCTYPE html>
<html lang="id"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Login - HavenStay</title><link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"><link rel="stylesheet" href="{{ asset('css/hotel-theme.css') }}"></head>
<body><main class="auth-page">
    <section class="auth-aside"><div><div class="eyebrow">HavenStay / Welcome back</div><h1>Tempat istirahat yang terasa seperti rumah.</h1><p>Masuk untuk menemukan kamar, mengatur reservasi, dan melihat perjalanan menginapmu.</p></div><div class="auth-foot eyebrow">Simple stay. Better days.</div></section>
    <section class="auth-main"><div class="auth-card"><div class="eyebrow">Akun HavenStay</div><h2>Selamat datang</h2><p class="muted mb-4">Masuk ke akunmu untuk melanjutkan.</p>
        <form action="{{ route('postlogin') }}" method="POST">@csrf
            <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
            <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
            <button type="submit" class="btn btn-primary w-100 mt-2">Login</button>
            <p class="muted text-center mt-4 mb-0">Belum punya akun? <a href="{{ route('register') }}" class="fw-bold">Register</a></p>
        </form>
    </div></section>
</main><script src="{{ asset('js/bootstrap.bundle.js') }}"></script></body></html>