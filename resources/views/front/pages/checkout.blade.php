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
                                        <p><strong>Blue denim shirt</strong></p>
                                        <p>Color: blue</p>
                                        <p>Size: M</p>
                                        <button type="button" class="btn btn-primary btn-sm me-1 mb-2"
                                            data-mdb-toggle="tooltip" title="Remove item">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                                            title="Move to the wish list">
                                            <i class="fas fa-heart"></i>
                                        </button>
                                        <!-- Data -->
                                    </div>

                                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                        <!-- Quantity -->
                                        <div class="d-flex mb-4" style="max-width: 300px">
                                            <button id="btn1" class="btn btn-primary px-3 me-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                <i class="fas fa-minus"></i>
                                            </button>

                                            <div class="form-outline">
                                                <input id="form1" min="0" name="quantity" type="number"
                                                    value="1" class="form-control" />
                                                <label class="form-label" for="form1">Quantity</label>
                                            </div>

                                            <button id="btn2" class="btn btn-primary px-3 ms-2"
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <!-- Quantity -->

                                        <!-- Price -->
                                        <p class="text-start text-md-center">
                                            <input type="text" name="totals" id="totals" class="form-control"
                                                readonly>
                                        </p>
                                        <!-- Price -->
                                    </div>
                                </div>
                                <!-- Single item -->

                                <hr class="my-4" />


                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Summary</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products
                                        <span>$53.98</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span>Gratis</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total amount</strong>
                                            <strong>
                                                <p class="mb-0">(including VAT)</p>
                                            </strong>
                                        </div>
                                        <span><strong>$53.98</strong></span>
                                    </li>
                                </ul>

                                <button type="button" class="btn btn-primary btn-lg btn-block">
                                    Go to checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <!-- col end -->
                    <div class="col-lg-4 col-md-4 mt-5 justify-content-center">
                        <div class="card">
                            <img src="{{ asset($produk->picture) }}" class="card-img img-fluid" alt="checkout image product"
                                style="height: 300px">
                            <div class="card-body">
                                <h1 class="h2">{{ $produk->name }}</h1>
                                <p class="h3 py-2">Rp. {{ number_format($produk->price) }}</p>


                                <h6>Description:</h6>
                                <p>{{ $produk->description }}</p>


                                <form action="" method="GET">
                                    @csrf
                                    <input type="hidden" name="product-title" value="Activewear">
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
