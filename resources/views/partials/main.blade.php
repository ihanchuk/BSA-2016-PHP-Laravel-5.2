@extends('index.index')

@section('content')
    <h1>BSA 16 PHP - Laravel 5.2 HomeWork</h1>
    <table class="table">
        <tr>
            <th>Url Shortener:</th>
            <th>Iphone IOC</th>
        </tr>
        <tr>
            <td><a href="{{$links["urls"]}}">{{$links["urls"]}}</a> </td>
            <td><a href="{{$links["phone"]}}">{{$links["phone"]}}</a></td>
        </tr>
    </table>
@stop