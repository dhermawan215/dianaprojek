@extends('layouts.app')

@section('content')
    <main style="margin-top: 58px">
        <div class="container pt-4">
            <section>
                <div class="row m-3">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <a href="{{ route('product.create') }}" class="btn btn-success"><i class="fa fa-plus"
                                        aria-hidden="true"></i> Tambah</a>
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
                                                        <a href="{{ route('product.edit', $row->id) }}"
                                                            class="text-primary"><i class="bi bi-pencil-square"></i></a>
                                                        <a href="{{ route('product.show', $row->id) }}"
                                                            class="text-primary"><i class="bi bi-eye"></i></a>
                                                        <form action="{{ route('product.destroy', $row->id) }}"
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

            const success = '{{ Session::has('success') }}';
            const info = '{{ Session::has('info') }}';
            const danger = '{{ Session::get('danger') }}';
            const msgSuccess = '{{ Session::get('success') }}';
            const msgInfo = '{{ Session::get('info') }}';
            const msgDanger = '{{ Session::get('danger') }}';
            if (success) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: msgSuccess,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            if (info) {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: msgInfo,
                    showConfirmButton: false,
                    timer: 1500
                });
            }
            if (danger) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: msgDanger,
                });
            }
        </script>
    @endpush
@endsection
