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
                                {{-- ELSA TASK --}}
                                {{-- Lengkapi Formnya --}}
                                <button class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
