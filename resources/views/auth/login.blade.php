<!DOCTYPE html>
<html>
<head>
    <title>Login - MyShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="auth-container">
<div style="font-size:24px; font-weight:bold; color:#2563eb; margin-bottom:10px;">
    🛒 MyShop
</div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Masuk</button>

        @if ($errors->any())
            <div style="color:red; margin-top:10px;">
                {{ $errors->first() }}
            </div>
        @endif

    </form>

    <p>Belum punya akun? <a href="/register">Daftar</a></p>

</div>

</body>
</html>