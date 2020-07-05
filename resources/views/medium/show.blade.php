@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-header">
    <h3 class="card-title">{{ $artikel->judul }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <p>  Slug : {{ $artikel->slug }} </p>
        <p>  {{ $artikel->isi }} </p>
        @foreach($tagku as $tags)
            <button class="btn btn-sm btn-success">{{ $tags }}</button>
        @endforeach
    </div>
</div>
@endsection