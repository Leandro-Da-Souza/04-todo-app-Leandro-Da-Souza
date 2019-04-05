@extends('layouts.app')

@section('content')

@foreach ($todos as $todo)
<div class="row">
    <div class="col">
       <div class="card mb-2">
           <div class="card-body text-center">
           <h5 class="card-title">{{$todo->title}}</h5>
           <p class="card-text">{{$todo->description}}</p>
           @if (isset($todo->created_at))
           <p class="card-text">Created At: {{$todo->created_at}}</p>
           @else
           <p class="card-text">No Date...</p>
           @endif
           </div>
           <form method="POST" action="/todo/{{$todo->id}}">
           @csrf
           @method('DELETE')
           <div class="text-center mb-3">
               <button type="submit" class="btn btn-sm btn-danger float-center">Delete</button>
           </div>
           </form>
       </div>
    </div>
</div>
@endforeach
    
@endsection