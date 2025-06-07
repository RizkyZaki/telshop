<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.plugins._top')
    <style>
        .bg-login {
            background-color: #ffffff;
            background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        }

        .btn-login {
            background-color: #1D1755;
        }

        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .logo-img-lg {
            max-height: 110px;
        }

        .bg-abstract {
            background-image: linear-gradient(to right,
                    #b71c1c calc(60% - 150px),
                    #c62828 calc(60% - 150px),
                    #d32f2f 60%,
                    #e53935 60%,
                    #f44336 calc(60% + 150px),
                    #ef5350 calc(60% + 150px),
                    #ef5350 calc(60% + 150px));
        }
    </style>
</head>


<body class="nk-body npc-crypto bg-white pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-lg">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em
                            class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-3">
                        <a href="{{ url('/') }}" class="logo-link">
                            <img class="logo-img logo-img-lg"
                                src="{{ asset('storage/assets/site/logo/' . appSetting()->logo) }}"
                                srcset="{{ asset('storage/assets/site/logo/' . appSetting()->logo) }}" alt="logo">
                        </a>
                    </div>
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Masuk</h5>
                            <div class="nk-block-des">
                                <p>Akses Panel Dashbor Menggunakan email dan kata sandi
                                    kamu.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="POST" action="{{ route('authenticated') }}">
                        @csrf

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email"
                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="Masukkan Email..." value="{{ old('email') }}" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" name="password" id="password"
                                class="form-control form-control-lg @error('password') is-invalid @enderror"
                                placeholder="Masukkan Kata Sandi..." required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-danger btn-lg btn-block">Masuk</button>
                    </form>
                    <div class="form-note-s2 pt-4">
                        Belum punya akun? <a href="{{ url('register') }}"><strong>Daftar Sekarang</strong></a>
                    </div>


                </div><!-- .nk-block -->

                <div class="nk-block nk-auth-footer">
                    <div class="mt-3">
                        <p>&copy; {{ date('Y') }} Telshop Official</p>
                    </div>
                </div>
            </div><!-- nk-split-content -->
            <div class="nk-split-content nk-split-stretch bg-abstract">

            </div><!-- nk-split-content -->
        </div><!-- nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->

    <!-- select region modal -->

</body>
@include('admin.plugins._bottom')


</html>
