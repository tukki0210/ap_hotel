@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン日</th><th>チェックアウト日</th>
        @foreach($items as $item)
        <tr>
            <th>{{$item->id}}</th>
            <td>{{$item->user->name}} 様</td>
            <td>{{$item->user->address}}</td>
            <td>{{$item->user->tel}}</td>
            <td>{{$item->number_of_reservations}}</td>
            <td>{{$item->check_in_day}}</td>
            <td>{{$item->check_out_day}}</td>
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