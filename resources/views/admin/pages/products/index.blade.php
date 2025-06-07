<thead>
    <tr class="nk-tb-item nk-tb-head">
        <th class="nk-tb-col"><span>Nama Produk</span></th>
        <th class="nk-tb-col"><span>Deskripsi</span></th>
        <th class="nk-tb-col"><span>Harga</span></th>
        <th class="nk-tb-col"><span>Stok</span></th>
        <th class="nk-tb-col"><span>Gambar</span></th>
        <th class="nk-tb-col"><span>Aksi</span></th>
    </tr>
</thead>
<tbody>
    @foreach ($products as $product)
        <tr class="nk-tb-item">
            <td class="nk-tb-col">{{ $product->name }}</td>
            <td class="nk-tb-col">{{ $product->description }}</td>
            <td class="nk-tb-col">Rp{{ number_format($product->price, 0, ',', '.') }}</td>
            <td class="nk-tb-col">{{ $product->stock }}</td>
            <td class="nk-tb-col">
                @if ($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="80">
                @else
                    <span class="text-muted">Tidak ada gambar</span>
                @endif
            </td>
            <td class="nk-tb-col">
                <a href="{{ url('dashboard/products/' . $product->id . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ url('dashboard/products/' . $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>
