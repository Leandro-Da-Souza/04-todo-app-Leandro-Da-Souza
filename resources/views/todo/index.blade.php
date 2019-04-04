@extends('layouts.app')

@section('content')
@foreach ($todos as $todo)
    {{$todo->title}}
@endforeach
    
@endsection