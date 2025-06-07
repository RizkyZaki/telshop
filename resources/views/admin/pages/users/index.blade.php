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

                                    <a href="{{url('dashboard/users/create')}}" class="btn btn-primary create"><em class="icon ni ni-plus"></em> <span>
                                            Tambah</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-preview">
                        <div class="card-inner">
                            <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col">Pengguna</th>
                                        <th class="nk-tb-col tb-col-mb">No Handphone</th>
                                        <th class="nk-tb-col tb-col-mb">Alamat</th>
                                        <th class="nk-tb-col tb-col-mb">Kelompok Pengguna</th>
                                        <th class="nk-tb-col tb-col-mb">Terdaftar Pada</th>
                                        <th class="nk-tb-col nk-tb-col-tools text-end"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collection as $item)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            {{ getInitial($item->name) }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $item->name }} </span>
                                                        <span>{{ $item->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span >{{ $item->phone }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span >{{ $item->address }}</span>
                                            </td>
                                            @php
                                                $userRole = $item->role;
                                                $badgeClass = '';
                                                $roleLabel = '';

                                                switch ($userRole) {
                                                    case 'admin':
                                                        $badgeClass = 'bg-success';
                                                        $roleLabel = 'Administrator';
                                                        break;
                                                    case 'buyer':
                                                        $badgeClass = 'bg-primary';
                                                        $roleLabel = 'Pembeli';
                                                        break;
                                                    case 'seller':
                                                        $badgeClass = 'bg-warning';
                                                        $roleLabel = 'Penjual';
                                                        break;
                                                    default:
                                                        $badgeClass = 'bg-secondary';
                                                        $roleLabel = 'Tidak Diketahui';
                                                        break;
                                                }
                                            @endphp

                                            <td class="nk-tb-col tb-col-mb">
                                                <span class="badge {{ $badgeClass }}">{{ $roleLabel }}</span>
                                            </td>

                                            <td class="nk-tb-col tb-col-mb"><span
                                                    class="">{{ timesInd($item->created_at) }}</span>
                                            </td>

                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#"
                                                                class="dropdown-toggle btn btn-icon btn-trigger"
                                                                data-bs-toggle="dropdown"><em
                                                                    class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{url('dashboard/users/' . encrypt_it($item->id) . '/edit')}}"
                                                                           ><em
                                                                                class="icon ni ni-pen"></em><span>Sunting</span></a>
                                                                    </li>
                                                                    <li><a href="javascript:void(0);"
                                                                            data-url='master/users'
                                                                            data-identity={{ encrypt_it($item->id) }}
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
@endsection
