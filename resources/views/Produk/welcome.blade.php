<!DOCTYPE html>
<html>
<head>
    <title>MyShop</title>

    <!-- CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div class="logo">MyShop</div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Selamat Datang di MyShop 🛒🛍️</h1>
    <p>Toko online sederhana berbasis Laravel + Supabase</p>
</div>

<!-- PRODUK -->
<div class="container">
    <h2>Preview Produk</h2>

    @if(!empty($Produk))
        <div class="grid">
            @foreach($Produk as $item)
                <div class="card">
                    <h3>{{ $item['nama'] }}</h3>
                    <p>Harga: Rp {{ $item['harga'] }}</p>
                </div>
            @endforeach
        </div>
    @else
        <p class="empty">Belum ada produk</p>
    @endif
</div>

<!-- FOOTER -->
<div class="footer">
    <p>© {{ date('2026') }} MyShop | Martha</p>
</div>

</body>
</html>