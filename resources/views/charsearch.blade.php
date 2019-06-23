@extends('layout')
@section('content')
@csrf
<div class="center">
    <form action="characterInfoJson" method="get">
        <input type="text" name="char_name" value="wprowadz imie szukanej postaci" class="searchInput">
        {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --}}
        <button type="submit">Szukaj</button>
    </form>
</div>
@endsection