@extends('layouts.hotel')

@section('body')
    <table>
        <th>予約ID</th><th>お名前</th><th>ご住所</th><th>電話番号</th><th>人数</th><th>チェックイン日</th><th>チェックアウト日</th>
        <th>料金</th><th>日数</th><th>部屋種</th><th>宿泊可能人数</th><th>部屋番号</th>
        @foreach($items as $item)
        <tr>
            <th>{{$item->user_id}}</th>
            <td>{{$item->user->name}} 様</td>
            <td>{{$item->user->address}}</td>
            <td>{{$item->user->tel}}</td>
            <td>{{$item->number_of_reservations}}名</td>
            <td>{{$item->check_in_day}}</td>
            <td>{{$item->check_out_day}}</td>
            {{-- roomメソッドのbelongToManyでroomモデルとその中間テーブルreserve_roomテーブルにアクセス --}}
            {{-- 中間テーブルデータはpivot属性に入っている --}}
            @foreach($item->room as $room)
            <td>{{$room->pivot}}円</td>
            <td>{{$room->pivot->days}}</td>
            {{-- roomモデルからさらにbelongToでroomTypeモデルにアクセスしている --}}
            <td>{{$room->roomType->room_name}}</td>
            <td>{{$room->roomType->capacity}}人</td>
            <td>{{$room->room_number}}号室</td>
            @endforeach
        </tr>
        @endforeach
    </table>
@endsection
