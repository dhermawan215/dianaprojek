@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none"><i
                                                    class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a class="text-decoration-none"
                                                href="{{ route('product.index') }}">Produk</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="mx-3 px-3 py-3">
                                <a href="{{ route('product.index') }}" class="text-danger"><i
                                        class="fa fa-arrow-circle-left ml-2" aria-hidden="true"></i>Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--Section: Statistics with subtitles-->
            <section>
                <div class="row m-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <div class="card">

                            <div class="card-header font-weight-bold">
                                Detail Produk
                            </div>
                            <div class="card-body">
                                <div class="card" style="width: 100%">
                                    <img src="{{ asset($data->picture) }}" class="card-img-top" alt="Chicago Skyscrapers" />
                                    <div class="card-body">
                                        <h5 class="card-title">Nama Produk</h5>
                                        <p class="card-text">{{ $data->name }}</p>
                                    </div>
                                    <ul class="list-group list-group-light list-group-small">
                                        <li class="list-group-item px-4">Kategori: {{ $data->categories->category_name }}
                                        </li>
                                        <li class="list-group-item px-4">Harga: Rp.{{ number_format($data->price) }}</li>

                                    </ul>
                                    <div class="card-body">
                                        <h5 class="card-text">Deskripsi Produk</h5>
                                        <p class="card-text">{{ $data->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->

            <!-- Modal -->

        </div>
    </main>
    @push('scripts')
    @endpush
@endsection
