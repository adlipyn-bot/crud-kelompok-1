<h1>Tambah Buku</h1>

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <p>
        <label>Kode Buku: </label>
        <input type="text" name="kode_buku" required>
    </p>
    <p>
        <label>Judul Buku: </label>
        <input type="text" name="judul" required>
    </p>
    <p>
        <label>Kategori: </label>
        <input type="text" name="kategori" required>
    </p>
    <p>
        <label>Penulis: </label>
        <input type="text" name="penulis" required>
    </p>
    <p>
        <label>Tahun Terbit: </label>
        <input type="number" name="tahun_terbit" required>
    </p>
    <p>
        <label>Jumlah: </label>
        <input type="number" name="jumlah" required>
    </p>
    <p>
        <label>Keterangan: </label><br>
        <textarea name="keterangan" rows="3"></textarea>
    </p>
    <button type="submit">Simpan</button>
</form>

<p>
    <a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
</p>