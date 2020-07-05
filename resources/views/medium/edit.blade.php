 @extends('layouts.master')

@section('content')
    <div class="ml-3 mt-3">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Artikel</h3>
            </div>
            <form action="/artikel/{{ $artikel->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" value="{{ $artikel->judul }}" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input type="text" class="form-control" id="isi" value="{{ $artikel->isi }}" name="isi" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="tag">Tag</label>
                        <input type="text" class="form-control" id="tag" value="{{ $artikel->isi }}" name="tag" placeholder="Tag">
                    </div>
                    <input type="hidden" class="form-control" id="slug" value="{{ $artikel->slug }}" name="slug" placeholder="Slug">
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection