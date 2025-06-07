@extends('admin.layout.main')

@section('content-admin')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">{{ $title }}</h4>
                            <p>{{ $heading }}</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            {{-- Form Tambah Produk --}}
                            <form action="{{ url('dashboard/products') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type="text" name="name" id="name" class="form-control" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="price">Harga</label>
                                    <input type="number" name="price" id="price" class="form-control" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="stock">Stok</label>
                                    <input type="number" name="stock" id="stock" class="form-control" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="image">Gambar Produk</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
