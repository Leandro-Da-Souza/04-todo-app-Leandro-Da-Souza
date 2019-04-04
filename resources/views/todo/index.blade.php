@extends('layouts.app')

@section('content')

@foreach ($todos as $todo)
<div class="row">
    <div class="col">
       <div class="card">
           <div class="card-body text-center">
           <h5>{{$todo->title}}</h5>
           <p class="card-text">{{$todo->description}}</p>
           </div>
       </div>
    </div>
</div>
@endforeach
    
@endsection