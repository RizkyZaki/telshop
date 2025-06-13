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
                                    <p>Haloo</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-block">
                    <ul class="row g-gs preview-icon-svg">
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card is-dark h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="{{ url('dashboard/users') }}" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount">{{ $userCount }}</div>
                                            <div class="info text-white">Pengguna</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card bg-info h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="{{ url('dashboard/category') }}" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount text-white">{{ $categoryCount }}</div>
                                            <div class="info text-white">Kategori</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-4 col-sm-6 col-12">
                            <div class="card bg-success h-100">
                                <div class="nk-ecwg nk-ecwg1">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title text-white">Total</h6>
                                            </div>
                                            <div class="card-tools">
                                                <a href="{{ url('dashboard/products') }}" class="text-white">Lihat
                                                    Semua</a>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="amount text-white">{{ $productCount }}</div>
                                            <div class="info text-white">Produk</div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </li><!-- .col -->
                        <li class="col-lg-12 col-sm-12 col-12">
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="card-title-group align-start mb-2">
                                        <div class="card-title">
                                            <h6 class="title">Grafik Visitor</h6>
                                            <p>Hasil Visitor</p>
                                        </div>
                                    </div>
                                    <div class="data">
                                        <div class="data-group">
                                            <div id="visitorChart">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li><!-- .col -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const options = {
                chart: {
                    type: 'line',
                    height: 300
                },
                series: [{
                    name: 'Pengunjung',
                    data: @json($monthlyData)
                }],
                xaxis: {
                    categories: [
                        'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                        'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                    ]
                },
                stroke: {
                    curve: 'smooth'
                },
                colors: ['#008FFB']
            };

            const chart = new ApexCharts(document.querySelector("#visitorChart"), options);
            chart.render();
        });
    </script>
@endsection
