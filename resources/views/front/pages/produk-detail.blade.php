@extends('front.layouts.app')

@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h2 pb-4">Produk Detail {{ $produk->name }}</h1>
            </div>
        </div>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="{{ asset($produk->picture) }}" alt="Card image cap"
                                id="product-detail">
                        </div>

                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2">{{ $produk->name }}</h1>
                                <p class="h3 py-2">Rp. {{ number_format($produk->price) }}</p>


                                <h6>Description:</h6>
                                <p>{{ $produk->description }}</p>


                                <form action="{{ route('chcekout', $produk->id) }}" method="GET">
                                    @csrf

                                    {{-- <div class="row">

                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Quantity
                                                    <input type="hidden" name="product-quanity" id="product-quanity"
                                                        value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success"
                                                        id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-secondary"
                                                        id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success"
                                                        id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                value="buy">Beli</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit"
                                                value="addtocard">Tambah ke keranjang</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

    </div>
@endsection
