@extends('layouts.app')

@section('content')

@foreach ($todos as $todo)
<div class="row">
    <div class="col">
       <div class="card mb-3">
           <div class="card-body text-center">
           <h5 class="card-title">{{$todo->title}}</h5>
           <p class="card-text">{{$todo->description}}</p>
           @if($todo->updated_at > $todo->created_at)
           <p class="card-text">Updated At: {{$todo->updated_at}}</p>
           @else
           <p class="card-text">Created At: {{$todo->created_at}}</p>
           @endif
           </div>

           <div class="container">
               <form method="POST" action="/todo/{{$todo->id}}">
               @csrf
               @method('DELETE')
               <div class="text-center mb-2">
                   <button type="submit" class="btn btn-sm btn-outline-danger float-center">Delete</button>
               </div>
               </form>
               <div class="text-center mb-2">
               <button type="submit" class="btn btn-sm btn-outline-info editbtn" data-toggle="modal" data-target="#editModal{{$todo->id}}">Edit</button>
               </div>
           </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal{{$todo->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form method="POST" action="/todo/{{$todo->id}}" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title:</label>
                            <input type="text" name="title" class="form-control" value="{{$todo->title}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                            <textarea value="{{$todo->description}}" class="form-control"name="description" cols="30" rows="5">{{$todo->description}}</textarea>
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-outline-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endforeach
    
@endsection