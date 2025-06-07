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
                            {{-- perbaiki action formnya --}}
                            <form action="{{ url('dashboard/users') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                {{-- Nama --}}
                                <div class="form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" required>
                                </div>

                                {{-- Email --}}
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukkan email" required>
                                </div>

                                {{-- Password --}}
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                                </div>

                                {{-- Role --}}
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control" required>
                                        <option value="">Pilih Role</option>
                                        <option value="admin">Admin</option>
                                        <option value="editor">Editor</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>

                                {{-- Foto --}}
                                <div class="form-group">
                                    <label for="photo">Foto Profil</label>
                                    <input type="file" name="photo" id="photo" class="form-control-file">
                                </div>

                                <button class="btn btn-primary mt-3">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
