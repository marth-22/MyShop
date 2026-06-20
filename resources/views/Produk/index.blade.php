<h1>Daftar Produk Coklat 🍫</h1>

<a href="/produk/create">+ Tambah Produk</a>

@foreach ($produk as $p)
    <div style="border:1px solid #ccc; padding:10px; margin:10px;">
        <h3>{{ $p->nama }}</h3>
        <p>Rp {{ $p->harga }}</p>
        <p>{{ $p->deskripsi }}</p>
    </div>
@endforeach