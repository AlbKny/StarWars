@extends('layout')
@section('content')
@csrf
{{$character->name}}
@endsection