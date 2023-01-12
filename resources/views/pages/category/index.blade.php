@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                                    aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none"><i
                                                    class="fa fa-home" aria-hidden="true"></i> Dashboard Kategori Produk</a>
                                        </li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <a href="#" class="btn btn-success" data-mdb-toggle="modal"
                                    data-mdb-target="#exampleModal"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->
            <section>
                <div class="row m-3">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                        <div class="card">
                            <h4 class="h4 p-2 m-2">Data Kategori Produk</h4>
                            <div class="card-body">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $row)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $row->category_name }}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{ route('category.edit', $row->id) }}"
                                                            class="text-primary"><i class="bi bi-pencil-square"></i></a>
                                                        <form action="{{ route('category.destroy', $row->id) }}"
                                                            method="post">
                                                            {!! method_field('delete') . csrf_field() !!}
                                                            <button type="submit" class="border-0 ml-3 show_confirm"><i
                                                                    class="bi bi-trash"></i></button>
                                                        </form>
                                                    </div>
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
            <!--Section: Statistics with subtitles-->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kategori Produk</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('category.store') }}" method="post" class="px-2 py-2">
                                @csrf
                                <label for="category_name">Nama Kategori</label>
                                <input type="text" class="text form-control mt-2" name="category_name"
                                    placeholder="masukan nama kategori produk">
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#example').DataTable();

                $('.show_confirm').click(function(event) {
                    var form = $(this).closest("form");
                    var name = $(this).data("name");
                    event.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection
