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
                            <form action="{{ url('dashboard/products') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="name">Nama Produk</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="price">Harga</label>
                                    <input type="number" class="form-control" id="price" name="price" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="stock">Stok</label>
                                    <input type="number" class="form-control" id="stock" name="stock" required>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="image">Gambar Produk</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>

                                <button class="btn btn-primary mt-4">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
