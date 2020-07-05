@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Data Pertanyaan</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <a href="/artikel/create" class="btn btn-primary mb-2">
        Buat artikel
    </a>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Tag</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikels as $key => $artikel)
                <tr>
                    <td> {{ $key+1 }} </td>
                    <td> {{ $artikel->judul }} </td>
                    <td> {{ $artikel->tag }} </td>
                    <td>
                        <a href="/artikel/{{$artikel->id}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                        <form action="/artikel/{{$artikel->id}}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Tag</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection

@push('scripts')

<!-- Page level plugins -->
<script src="{{ asset('/sbadmin2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('/sbadmin2/js/demo/datatables-demo.js') }}"></script>

<script src="{{ asset('/sbadmin2/js/swal.min.js') }}"></script>
<script>
    @if(session('sukses'))
    Swal.fire({
        title: 'Berhasil!',
        text: 'Data Berhasil disimpan',
        icon: 'success'
    })
    @endif
</script>
@endpush