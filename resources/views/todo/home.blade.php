@extends('layout.app')

@section('body')
    <br>
   @include('todo.partials.message')
        <a href="todo/create" class="btn btn-info">Add New</a>

    <div class="col-lg-4 col-lg-offset-4">
       <center> <h1>Todo List</h1> </center>

        <ul class="list-group col-lg-8">
               
                    @foreach ($todos as $todo)
                    <li class="list-group-item">
                     <a href="{{'/todo/'.$todo->id}}">  {{ucfirst($todo->title)}} </a>
                    <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
                    </li>  
                    @endforeach               
        </ul>

        <ul class="list-group col-lg-4">
               
                @foreach ($todos as $todo)
                <li class="list-group-item">
                  <a href="{{'/todo/'.$todo->id.'/edit/'}}"><span class="glyphicon glyphicon-edit" style="font-size: 19px;"></span></i></a>
                
                <form class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
                    
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                
                    <button type="submit"  style="border: none;"><span class="glyphicon glyphicon-trash"></span>
                    </button>
                </form>
                </li>  
                @endforeach               
    </ul>

    </div>
@endsection