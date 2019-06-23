@extends('layout')
@section('content')
@csrf

<table class="table_center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Height</th>
        <th>Mass</th>
        <th>Hair color</th>
        <th>skin color</th>
        <th>eye color</th>
        <th>birth year</th>
        <th>gender</th>
    </tr>
    <tr>
        <td>{{$character -> character_id}}</td>
        <td>{{$character -> name}}</td>
        <td>{{$character -> height}}</td>
        <td>{{$character -> mass}}</td>
        <td>{{$character -> hair_color}}</td>
        <td>{{$character -> skin_color}}</td>
        <td>{{$character -> eye_color}}</td>
        <td>{{$character -> birth_year}}</td>
        <td>{{$character -> gender}}</td>
    </tr>
</table>
@endsection