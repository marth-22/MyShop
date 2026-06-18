<!DOCTYPE html>
<html>
<head>
    <title>Register - MyShop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<div class="auth-container">
<div style="font-size:24px; font-weight:bold; color:#2563eb; margin-bottom:10px;">
    🛒 MyShop
</div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input type="text" name="name" placeholder="Nama" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" name="password" placeholder="Password" required>

        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" required>

        <button type="submit">Daftar</button>

    </form>

    <p>Sudah punya akun? <a href="/login">Login</a></p>

</div>

</body>
</html>