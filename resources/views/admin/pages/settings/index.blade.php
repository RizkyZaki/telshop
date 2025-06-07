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
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-inner">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tabItem5"><em
                                            class="icon ni ni-setting-alt-fill"></em><span>Pengaturan Situs</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#tabItem6"><em
                                            class="icon ni ni-call-fill"></em><span>Pengaturan Sosial Media</span></a>
                                </li>

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabItem5">
                                    <div class="gy-3">
                                        <form action="{{ url('dashboard/settings/site') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Nama Situs</label>
                                                        <span class="form-note">
                                                            Tentukan nama situs web Anda.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                name="name" value="{{ appSetting()->name }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Keyword Situs</label>
                                                        <span class="form-note">
                                                            Tentukan Keyword situs web Anda.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('keyword') is-invalid @enderror"
                                                                name="keyword" value="{{ appSetting()->keyword }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Tagline Situs</label>
                                                        <span class="form-note">
                                                            Tentukan Tagline situs web Anda.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('tagline') is-invalid @enderror"
                                                                name="tagline" value="{{ appSetting()->tagline }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Deskripsi Situs</label>
                                                        <span class="form-note">
                                                            Tentukan Deskripsi situs web Anda.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                                                                value="{{ appSetting()->description }}">{{ appSetting()->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Logo Situs</label>
                                                        <span class="form-note">Logo Situs.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file"
                                                                class="form-control @error('logo') is-invalid @enderror"
                                                                name="logo" value="{{ appSetting()->logo }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn site btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabItem6">
                                    <div class="gy-3">
                                        <form action="{{ url('dashboard/settings/contact') }}" method="POST">
                                            @csrf
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">No Handphone</label>
                                                        <span class="form-note">No Handphone Situs.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('phone') is-invalid @enderror"
                                                                name="phone" value="{{ appSetting()->phone }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <span class="form-note">Email Situs.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="email"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" value="{{ appSetting()->email }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Alamat</label>
                                                        <span class="form-note">Alamat Perusahaan.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('address') is-invalid @enderror"
                                                                name="address" value="{{ appSetting()->address }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Instagram</label>
                                                        <span class="form-note">Tautan Instagram.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('ig') is-invalid @enderror"
                                                                name="ig" value="{{ appSetting()->ig }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Facebook</label>
                                                        <span class="form-note">Tautan Facebook.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('fb') is-invalid @enderror"
                                                                name="fb" value="{{ appSetting()->fb }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Twitter</label>
                                                        <span class="form-note">Tautan Twitter.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text"
                                                                class="form-control @error('twitter') is-invalid @enderror"
                                                                name="twitter" value="{{ appSetting()->twitter }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7 offset-lg-5">
                                                    <div class="form-group mt-2">
                                                        <button type="submit" class="btn cp btn-primary">Simpan</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
