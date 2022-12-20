@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <a href="{{ route('category.index') }}" class="btn btn-success"><i
                                        class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back</a>
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
                            <h5 class="h5 px-2 py-2">Edit Kategory</h5>
                            <div class="card-body">
                                <form action="{{ route('category.update', $data->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <label for="category_name">Nama Kategori</label>
                                    <input type="text" class="text form-control mt-2" name="category_name"
                                        placeholder="masukan nama kategori produk"
                                        value="{{ old('category_name') ?? $data->category_name }}">
                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!--Section: Statistics with subtitles-->


        </div>
    </main>
    @push('scripts')
    @endpush
@endsection
