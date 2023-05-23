@extends('layouts.admin')

@section('page-title', $progetto->title)
@section('content')
    <h1>{{ $progetto->title }}</h1>
    <p>{{ $progetto->content }}</p>
    <small>{{ $progetto->slug }}</small>
    <div class="mt-5">
        <a class="btn btn-primary" href="{{ route('admin.progetti.index') }}">Torna alla lista</a>


    </div>

@endsection
