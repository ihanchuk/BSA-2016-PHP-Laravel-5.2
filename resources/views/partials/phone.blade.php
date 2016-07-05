@extends('index.index')

@section('content')
    <h1>Testing Iphone</h1>
    <table class="table">
        <tr>
            <th>Model:</th>
            <th>Screen:</th>
            <th>Battery:</th>
            <th>Camera:</th>
            <th>Processor:</th>
        </tr>
        <tr>
            <td>{{$phone["model"]}}</td>
            <td>{{$phone["display"]}}</td>
            <td>{{$phone["battery"]}}</td>
            <td>{{$phone["camera"]}}</td>
            <td>{{$phone["processor"]}}</td>
        </tr>
    </table>
@stop