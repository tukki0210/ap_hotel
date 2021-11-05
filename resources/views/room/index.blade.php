@extends('layouts.hotel')

@section('body')
    <table>
    <th>部屋ID</th><th>部屋種ID</th><th>宿泊可能人数</th><th>部屋番号</th>
    @foreach($items as $item)
    <tr>
        <td>{{$item->room_id}}</td>
        <td>{{$item->roomType->room_name}}</th>
        <td>{{$item->roomType->capacity}}</td>
        <td>{{$item->room_number}}</th>
    </tr>
    @endforeach
    </table>
@endsection