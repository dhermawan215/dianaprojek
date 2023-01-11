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
                            <div class="col-lg-12 col-md-12 px-2 py-2">
                                <h4 class="h4 fw-bold">Produk: {{ $transaction->product->name }}</h4>
                                <ul class="list-group p-2 m-2">
                                    <li class="list-group">Pembeli : {{ $transaction->user->name }}</li>
                                    <li class="list-group">Qty : {{ $transaction->qty }}</li>
                                    <li class="list-group">Total : Rp. {{ number_format($transaction->totals, 2) }}</li>
                                    <li class="list-group">Tanggal : {{ $transaction->date_transaction }}</li>
                                    <li class="list-group">Alamat : {{ $transaction->address }}</li>
                                    @switch($transaction->status)
                                        @case(1)
                                            <li class="list-group text-success fw-bold">Status : Sukses</li>
                                        @break

                                        @default
                                            <li class="list-group text-primary fw-bold">Status : Pending</li>
                                    @endswitch
                                </ul>
                            </div>
                        </div>
                        @if (is_null($transaction->receipt))
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="p-auto mt-3">
                                        <div class="card p-2">
                                            <h5 class="h5">Upload Bukti Transfer</h5>
                                            <p class="text-left">Silahkan transfer ke rekening sesuai pesanan anda ke
                                                rekening Atas Nama</p>
                                            <p class="text-primary fw-bold">Mila Isnawati </p>
                                            <p class="text-primary fw-bold">No Rek: (BCA) 093501048213533 </p>
                                        </div>
                                        <div class="card p-2">
                                            <form action="{{ route('receipt', $transaction->id) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <input type="file" name="receipt" id="" class="form-control">
                                                <button type="submit" class="btn btn-primary mt-2">Upload</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="p-auto mt-3">
                                        <div class="card p-2">
                                            <img src="{{ asset($transaction->receipt) }}" alt="bukti transaksi">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>

                </div>
            </div>
        </section>
        <!-- Close Content -->

    </div>
@endsection
