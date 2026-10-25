<h1>Edit Buku</h1>

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')
    <p>
        <label>Kode Buku: </label>
        <input type="text" name="kode_buku" value="{{ $buku->kode_buku }}" required>
    </p>
    <p>
        <label>Judul Buku: </label>
        <input type="text" name="judul" value="{{ $buku->judul }}" required>
    </p>
    <p>
        <label>Kategori: </label>
        <input type="text" name="kategori" value="{{ $buku->kategori }}" required>
    </p>
    <p>
        <label>Penulis: </label>
        <input type="text" name="penulis" value="{{ $buku->penulis }}" required>
    </p>
    <p>
        <label>Tahun Terbit: </label>
        <input type="number" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required>
    </p>
    <p>
        <label>Jumlah: </label>
        <input type="number" name="jumlah" value="{{ $buku->jumlah }}" required>
    </p>
    <p>
        <label>Keterangan: </label><br>
        <textarea name="keterangan" rows="3">{{ $buku->keterangan }}</textarea>
    </p>
    <button type="submit">Update</button>
</form>

<p>
    <a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
</p>