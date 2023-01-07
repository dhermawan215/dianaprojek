@extends('front.layouts.app')

@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h2 pb-4">Checkout Detail {{ $produk->name }}</h1>
            </div>
        </div>

        <section class="h-100 gradient-custom">
            <div class="container py-5">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-8">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Checkout Form</h5>
                            </div>
                            <div class="card-body">
                                <!-- Single item -->
                                <form action="{{ route('transactions.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                                            <!-- Image -->
                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img src="{{ asset($produk->picture) }}" class="w-100"
                                                    alt="Blue Jeans Jacket" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- Image -->
                                        </div>

                                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                                            <!-- Data -->
                                            <p><strong>{{ $produk->name }}</strong></p>
                                            <input type="hidden" name="product_id" value="{{ $produk->id }}">
                                            <!-- Data -->
                                            <!-- Quantity -->
                                            <div class="d-flex mb-4" style="max-width: 300px">
                                                <button id="btn1" class="btn btn-primary px-3 me-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                    <i class="fas fa-minus"></i>
                                                </button>

                                                <div class="form-outline">
                                                    <label class="form-label fw-normal" for="form1">Quantity</label>
                                                    <input id="form1" min="0" name="qty" type="number"
                                                        value="1" class="form-control" />

                                                </div>

                                                <button id="btn2" class="btn btn-primary px-3 ms-2"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                    <i class="fas fa-plus"></i>
                                                </button>
                                            </div>
                                            <!-- Quantity -->

                                            <!-- Price -->
                                            <p>
                                                <label for="totals" class="fw-normal">Total Biaya</label>
                                                <input type="text" name="totals" id="totals" class="form-control"
                                                    readonly>
                                            </p>
                                            <!-- Price -->
                                            <div class="mt-3">
                                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                <p class="fw-normal">Dipesan Oleh: {{ Auth::user()->name }}</p>
                                            </div>
                                            <div class="mt-3">
                                                <label for="" class="fw-normal">Alamat Pengiriman</label>
                                                <textarea name="address" id="" cols="40" rows="10" class="form-control" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single item -->

                                    <hr class="my-4" />
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Go to checkout
                                    </button>
                                </form>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>


    </div>
@endsection
@push('cscripts')
    <script>
        $(document).ready(function() {
            qty();
        });

        function qty() {
            const price = "{{ $produk->price }}";
            const qty = $("#form1").val();
            let totals = price * qty;
            $('#totals').val(totals);
            $("#btn1").click(function(e) {
                e.preventDefault();

                const qty = $("#form1").val();
                let totals = price * qty;
                $('#totals').val(totals);

            });
            $("#btn2").click(function(e) {
                e.preventDefault();

                const qty = $("#form1").val();
                let totals = price * qty;
                $('#totals').val(totals);

            });
        }
    </script>
@endpush
