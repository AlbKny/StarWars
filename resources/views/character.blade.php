@extends('layout')
@section('content')

{{-- @foreach ($data as $item)
{{$item['name']}}
<br>
@endforeach
{{$counter}} --}}

<table class="table_center">
    <caption style="color:#F1B025; font-size: 26px;">Star Wars Characters</caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Height</th>
        <th>Mass</th>
    </tr>
    @foreach ($data as $item)
    <tr>
        <td>{{$item->character_id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->height}}</td>
        <td>{{$item->mass}}</td>
    </tr>
    @endforeach
</table>

@endsection
{{-- {{$data}} --}}