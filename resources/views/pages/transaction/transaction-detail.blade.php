@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <h5 class="h5">Detail Transaksi {{ $transaction->tr_no }}</h5>
                            </div>
                            <div class="mx-3 px-3 py-3">
                                <a href="{{ route('transaction.index') }}" class="text-danger text-decoration-none"><i
                                        class="fa fa-arrow-circle-left ml-2" aria-hidden="true"></i>Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row m-3">
                    <div class="col-lg-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-primary fw-bold"> Foto Produk</p>
                                        <img src="{{ asset($transaction->product->picture) }}" class=""
                                            alt="foto produk transnaksi" height="300px">
                                    </div>
                                    <div class="col-lg-4">
                                        <p class="text-primary fw-bold"> Detail Transaksi</p>
                                        <ul class="list-group p-2 m-2">
                                            <li class="list-group">Pembeli : {{ $transaction->user->name }}</li>
                                            <li class="list-group">Qty : {{ $transaction->qty }}</li>
                                            <li class="list-group">Total : Rp. {{ number_format($transaction->totals, 2) }}
                                            </li>
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
                                    <div class="col-lg-4">
                                        <p class="text-primary fw-bold">Bukti Transfer</p>
                                        <img src="{{ asset($transaction->receipt) }}" height="550px" width="80%"
                                            alt="foto produk transnaksi">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row m-3">
                    <div class="col-lg-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <p class="text-primary fw-bold">Ganti Status Transaksi</p>
                                <form action="{{ route('transaction.update', $transaction->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex">

                                        <select name="status" id="" class="form-control">
                                            <option selected>Ubah Status Transaksi</option>
                                            <option value="0">Pending</option>
                                            <option value="1">Sukses</option>
                                        </select>


                                        <button class="btn btn-success mt-2">Ubah Status</button>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->

            <!--Section: Statistics with subtitles-->

            <!-- Modal -->

        </div>
    </main>
@endsection
