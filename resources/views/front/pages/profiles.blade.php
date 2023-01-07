@extends('front.layouts.app')

@section('contents')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h2 pb-4">Menu Kamu</h1>
            </div>
        </div>
        <!-- Open Content -->
        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="flex mt-4">
                            <a href="" class="btn btn-success">Akun Anda</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-4">
                        <h5 class="h5 text-primary fw-semibold">Data transaksi anda</h5>
                        <div class="px-2 py-2">
                            <table id="example" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Transaksi</th>
                                        <th>Produk</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($transaksi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tr_no }}</td>
                                            <td>{{ $data->product->name }}</td>
                                            <td>Rp. {{ $data->totals }}</td>
                                            @if ($data->status == 0)
                                                <td class="text-primary">Belum Terkonfirmasi</td>
                                            @else
                                                <td class="text-success">Terkonfirmasi</td>
                                            @endif
                                            <td>
                                                <a href="{{ route('transactions.show', $data->id) }}"
                                                    class="btn btn-success">Upload
                                                    Bukti Bayar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Close Content -->

    </div>
    @push('cscripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
    @endpush
@endsection
