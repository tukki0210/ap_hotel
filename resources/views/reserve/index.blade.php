@extends('layouts.hotel')

@section('body')
    <table>
    @foreach($items as $item)
    <tr>
        <th>{{$item->id}}</th>
        <td>{{$item->user->name}} 様</td>
        <td>住所：{{$item->user->address}}</td>
        <td>電話番号:{{$item->user->tel}}</td>
        <td>人数:{{$item->number_of_reservations}}</td>
        <td>チェックイン日:{{$item->check_in_day}}</td>
        <td>チェックアウト日:{{$item->check_out_day}}</td>
    </tr>
    @endforeach
    </table>
@endsection

<style>
    table{
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
    }
    table th, table td{
        padding: 10px 0;
        text-align: center;
    }
    table tr:nth-child(odd){
        background-color: #eee;
    }

</style>