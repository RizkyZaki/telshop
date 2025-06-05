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
            background-image: linear-gradient(to right, #08061a calc(60% - 150px), #0e0a29 calc(60% - 150px), #140f3d 60%, #1b1556 60%, #221a69 calc(60% + 150px), #271e7a calc(60% + 150px), #251b80 100%);
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
                            <h5 class="nk-block-title">Register</h5>
                            <div class="nk-block-des">
                                <p>Buat Akun</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="POST" action="{{ route('authenticated') }}">
                       {{-- // BIMO TASK // --}}
                    </form>


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
