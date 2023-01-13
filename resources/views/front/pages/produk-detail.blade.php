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
                                        {{-- <div class="col d-grid">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                Launch demo modal
                                            </button>
                                        </div> --}}
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Ke Keranjang</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                            <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                                <img src="{{ asset($produk->picture) }}" class="w-100" alt="Blue Jeans Jacket" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                    </div>
                                </a>
                            </div>
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
                                    <input id="form1" min="0" name="qty" type="number" value="1"
                                        class="form-control" />

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
                                <input type="text" name="totals" id="totals" class="form-control" readonly>
                            </p>
                            <!-- Price -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="addcart">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Close Content -->

    </div>
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

                function addcar() {
                    $('#addcart').click(function(e) {
                        e.preventDefault();
                        const totalss = $('#totals').val();
                        const qtys = $('#form1').val();
                        const idproduct = "{{ $produk->id }}"

                        $.ajax({
                            type: 'POST',
                            url: "{{ route('addcart') }}",
                            data: {
                                produk: idproduct,
                                qty: qtys,
                                totals: totalss
                            },
                            success: function(data) {
                                alert(data.success);
                            }
                        });

                    });
                }
            }
        </script>
    @endpush
@endsection
