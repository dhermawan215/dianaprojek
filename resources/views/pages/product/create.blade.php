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
                                                    class="fa fa-home" aria-hidden="true"></i> Dashboard</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a class="text-decoration-none"
                                                href="{{ route('product.index') }}">Produk</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="mx-3 px-3 py-3">
                                <a href="{{ route('product.index') }}" class="text-danger"><i
                                        class="fa fa-arrow-circle-left" aria-hidden="true"></i>Back</a>
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

                            <div class="card-header font-weight-bold">
                                Formulir Tambah Produk
                            </div>
                            <div class="card-body">
                                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama Produk</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="masukan nama produk">
                                    </div>

                                    <div class="mb-3">
                                        <label for="Kategori Produk" class="form-label">Kategori Produk</label>
                                        <select name="category_id" id="Kategori produk" class="form-control">
                                            <option selected disabled>-Pilih Kategori Produk-</option>
                                            @foreach ($category as $data)
                                                <option value="{{ $data->id }}">{{ $data->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Deskripsi Produk" class="form-label">Deskripsi Produk</label>
                                        <textarea name="description" class="form-control" id="Deskripsi Produk" cols="20" rows="10"
                                            placeholder="masukan deskripsi produk"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="Harga" class="form-label">Harga</label>
                                        <input type="number" name="price" id="Harga" class="form-control"
                                            placeholder="masukan harga dalam bentuk angka">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Foto Produk" class="form-label">Foto Produk</label>
                                        <input type="file" name="picture" id="Foto Produk" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Statistics with subtitles-->

            <!-- Modal -->

        </div>
    </main>
    @push('scripts')
    @endpush
@endsection
