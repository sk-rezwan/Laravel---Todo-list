@extends('layout.app')

@section('body')

    <br>
    <a href="/todo" class="btn btn-info">Back</a>

<div class="col-lg-6 col-lg-offset-4">
    
<h1>{{substr(Route::currentRouteName(),5)}}&nbsp;item</h1>

    <form class="form-horizontal" action="/todo/@yield('editId')" method="post">
        {{csrf_field()}}
        @section('editMethod')
          @show
    
            <fieldset>
                <div class="form-group">
              
                   <input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="Title">
                  </div>
              
              <div class="form-group">
              
                <textarea class="form-control" name="body" id="exampleTextarea" rows="5" placeholder="Body" > @yield('editBody') </textarea>
              </div>
             
             
              <button type="submit" class="btn btn-success ">Submit</button>
            </fieldset>
          </form>
         @include('todo.partials.errors')
</div>
@endsection