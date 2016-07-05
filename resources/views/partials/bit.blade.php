@extends('index.index')

@section('content')
    <h1>Testing BitLy Short Links</h1>
    <a href="{{ $link }}">{{ $link }}</a>
@stop