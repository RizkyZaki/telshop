
@extends('admin.layout.main')

@section('content-admin')
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">

                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">{{ $title }}</h4>
                                    <p>{{ $heading }}</p>
                                </div>
                                <div class="nk-block-head-content">

                                    <a href="{{ url('dashboard/products/create') }}" class="btn btn-primary create"><em
                                            class="icon ni ni-plus"></em> <span>
                                            Tambah</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <table class="datatable-init table " data-auto-responsive="false">
                                <thead>
                                    <tr>
                                        <th class="nk-tb-col nk-tb-col-check">
                                            #
                                        </th>
                                        <th class="nk-tb-col">Nama Produk</th>
                                        <th class="nk-tb-col tb-col-mb">Kategori</th>
                                        <th class="nk-tb-col tb-col-mb">Harga</th>
                                        <th class="nk-tb-col tb-col-mb">Status</th>
                                        <th class="nk-tb-col tb-col-mb">Stok</th>
                                        <th class="nk-tb-col tb-col-mb">Gambar</th>
                                        <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($collection as $item)
                                        <tr class="">
                                            <td class="nk-tb-col">
                                                {{ $no++ }}
                                            </td>
                                            <td class="nk-tb-col"><span class="">{{ $item->name }}</span></td>
                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class="">{{ $item->category->name }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class="">Rp{{ number_format($item->price, 0, ',', '.') }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span class="badge {{ $item->status === 'available' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ $item->status === 'available' ? 'Tersedia' : 'Tidak Tersedia' }}
                                                </span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class="">{{ $item->stock }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                @if ($item->image)
                                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" width="120">
                                                @else
                                                    <span class="text-muted">Tidak ada gambar</span>
                                                @endif
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="dropdown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{url('dashboard/products/' . $item->slug . '/edit')}}"
                                                                            ><em
                                                                                class="icon ni ni-pen"></em><span>Sunting</span></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);" data-url="products"
                                                                            data-identity={{ $item->slug }}
                                                                            class="delete"><em
                                                                                class="icon ni ni-trash"></em><span>Hapus</span></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
    @push('customJs')
         <script>
            let csrfToken = $('meta[name="csrf-token"]').attr("content");
        </script>
        <script src="{{url('custom/js/delete.js')}}"></script>
    @endpush
@endsection

