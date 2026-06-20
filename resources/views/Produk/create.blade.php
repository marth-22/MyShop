<h1>Tambah Produk</h1>

<form method="POST" action="/produk">
    @csrf

    <input name="nama" placeholder="Nama Produk"><br><br>
    <input name="harga" placeholder="Harga"><br><br>
    <textarea name="deskripsi" placeholder="Deskripsi"></textarea><br><br>

    <button type="submit">Simpan</button>
</form>