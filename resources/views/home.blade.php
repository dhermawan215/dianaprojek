@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <!--Section: Statistics with subtitles-->
            <section>
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">

                                            <i class="fas fa-box text-info fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Produk</h4>

                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">18,000</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <i class="far fa-comment-alt text-warning fa-3x me-4"></i>
                                        </div>
                                        <div>
                                            <h4>Total Kategori Produk</h4>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <h2 class="h1 mb-0">84,695</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0 me-4">$76,456.00</h2>
                                        </div>
                                        <div>
                                            <h4>Total Transaksi</h4>
                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fas fa-wallet text-danger fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between p-md-1">
                                    <div class="d-flex flex-row">
                                        <div class="align-self-center">
                                            <h2 class="h1 mb-0 me-4">$36,000.00</h2>
                                        </div>
                                        <div>
                                            <h4>Total User</h4>

                                        </div>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="fa fa-user text-success fa-3x"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->
        </div>
    </main>
@endsection
