@extends('layouts.hotel')

@section('body')
    <table>
    <th>部屋種別ID</th><th>部屋種</th><th>宿泊可能人数</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->room_type_id}}</td>
        <td>{{$item->room_name}}</th>
        <td>{{$item->capacity}}</td>
    </tr>
    @endforeach
    </table>
@endsection