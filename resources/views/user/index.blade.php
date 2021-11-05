@extends('layouts.hotel')

@section('body')
    <table>
    <th>お客さまID</th><th>お名前</th><th>ご住所</th><th>電話番号</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->user_id}}</td>
        <td>{{$item->name}}</th>
        <td>{{$item->address}}</td>
        <td>{{$item->tel}}</th>
    </tr>
    @endforeach
    </table>
@endsection