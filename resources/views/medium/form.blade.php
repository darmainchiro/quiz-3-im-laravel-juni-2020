@extends('layouts.master')

@section('content')
@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">Buat Artikel</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form action="/artikel" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" id="isi" name="isi" placeholder="Isi">
                </div>
                <div class="form-group">
                    <label for="tag">Tag</label>
                    (Pisahkan Tag dengan tanda titik koma(;))
                    <input type="text" class="form-control" id="tag" name="tag" placeholder="Contoh : laravel;php">
                </div>
                <input type="hidden" class="form-control" id="slug" name="slug" placeholder="Slug">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection