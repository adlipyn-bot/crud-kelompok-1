<h1>Daftar Buku Perpustakaan</h1>

<p>
    <a href="{{ route('buku.create') }}">Tambah Buku</a>
</p>

@session('success')
    <p style="color: green;">{{ session('success') }}</p>
@endsession

<table border="1" cellpadding="5">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bukus as $key => $buku)
        <tr>
            <td>{{ $key + 1 }}</td>
            <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->kategori }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->jumlah }}</td>
            <td>
                <a href="{{ route('buku.show', $buku->id) }}">Lihat Detil</a> |
                <a href="{{ route('buku.edit', $buku->id) }}">Edit</a> |
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>