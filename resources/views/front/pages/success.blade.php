@extends('front.layouts.app')

@section('contents')
    <div class="container mt-4 mb-4">
        <div class="row d-flex cart align-items-center justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-12 border-right p-5">
                            <div class="text-center order-details">
                                <div class="d-flex justify-content-center mb-5 flex-column align-items-center"> <span
                                        class="check1"><i class="fa fa-check"></i></span> <span class="font-weight-bold">Order
                                        Confirmed</span> <small class="mt-2">Selanjutnya lakukan pembayaran dan upload
                                        bukti bayar</small> </div> <a href="{{ route('profiles.index') }}"
                                    class="btn btn-danger btn-block order-button">Go
                                    to your Order</a>
                            </div>
                        </div>

                    </div>
                    <div> </div>
                </div>
            </div>
        </div>
    </div>
@endsection
