@extends('front.layouts.app')

@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h2 pb-4">Produk</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">

                <div class="row">
                    @forelse ($produk as $data)
                        <div class="col-md-3 col-lg-3 px-2 py-3 m-2">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="{{ $data->picture }}"
                                        style="height: 350px">
                                    <div
                                        class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li><a class="btn btn-success text-white mt-2"
                                                    href="{{ route('produk.show', $data->id) }}"><i
                                                        class="far fa-eye"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.html"
                                        class="h3 text-decoration-none fw-normal">{{ $data->name }}</a>

                                    <p class="text-center mb-0 text-success fw-bold">Rp.
                                        {{ number_format($data->price) }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                <div class="row">

                    {{ $produk->links('layouts.pagination') }}

                </div>
            </div>

        </div>

    </div>
@endsection
