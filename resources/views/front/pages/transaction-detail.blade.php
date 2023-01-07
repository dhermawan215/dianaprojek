@extends('front.layouts.app')

@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h2 pb-4">Detail Transaksi No: {{ $transaction->tr_no }} </h1>
            </div>
        </div>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="{{ asset($transaction->product->picture) }}"
                                alt="Card image cap" id="transaction-product-detail" style="height: 500px">
                        </div>

                    </div>
                    <!-- col end -->
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <p>ini untuk isi transaksi</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

    </div>
@endsection
