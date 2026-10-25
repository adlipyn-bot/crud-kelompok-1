<h1>Detil Buku</h1>

<p>
    <strong>Kode Buku:</strong> {{ $buku->kode_buku }} <br>
    <strong>Judul:</strong> {{ $buku->judul }} <br>
    <strong>Kategori:</strong> {{ $buku->kategori }} <br>
    <strong>Penulis:</strong> {{ $buku->penulis }} <br>
    <strong>Tahun Terbit:</strong> {{ $buku->tahun_terbit }} <br>
    <strong>Jumlah:</strong> {{ $buku->jumlah }} <br>
    <strong>Keterangan:</strong> {{ $buku->keterangan ?? 'Tidak ada keterangan' }}
</p>

<p>
    <a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
</p>