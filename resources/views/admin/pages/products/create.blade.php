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

                            {{-- Nama Produk --}}
                            <div class="form-group">
                                <label for="name">Nama Produk</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Kategori --}}
                            <div class="form-group">
                                <label for="category_id">Kategori</label>
                                <select name="category_id" class="form-select js-select2 @error('category_id') is-invalid @enderror" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach($category as $cat)
                                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>
                                            {{ $cat->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Deskripsi --}}
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror summernote" rows="4">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Harga --}}
                            <div class="form-group">
                                <label for="price">Harga</label>
                                <input type="number" step="0.01" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" required>
                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Stok --}}
                            <div class="form-group">
                                <label for="stock">Stok</label>
                                <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" required>
                                @error('stock')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Gambar --}}
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Status --}}
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-select js-select2 @error('status') is-invalid @enderror" required>
                                    <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Tersedia</option>
                                    <option value="unavailable" {{ old('status') == 'unavailable' ? 'selected' : '' }}>Tidak Tersedia</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mt-2">Simpan Produk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('customJs')
    <script>
        function texteditor() {
            $("textarea.summernote").summernote({
                placeholder: "Deskripsi",
                tabsize: 2,
                height: 150,
                toolbar: [
                    ["style", ["style"]],
                    ["font", ["bold", "italic", "underline", "clear"]],
                    ["font", ["strikethrough", "superscript", "subscript"]],
                    ["fontname", ["fontname"]],
                    ["fontsize", ["fontsize"]],
                    ["color", ["color"]],
                    ["para", ["ul", "ol", "paragraph"]],
                    ["height", ["height"]],
                ],
            });
        }
        $(document).ready(function() {
            texteditor();
        });
    </script>
@endpush
@endsection
