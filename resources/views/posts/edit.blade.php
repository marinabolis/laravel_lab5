
    
@extends("site_layouts.app")  
    @section('content')

<form action="/posts/{{$id}}" method="post">
    @csrf
    @method("PATCH")
<div class="mb-3">
    <label  class="form-label">Id</label>
    <input type="text" class="form-control" value="{{$id}}" name="id" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" class="form-control" value="{{$title}}" name="title" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text" class="form-control"  value="{{$description}}"name="description" >
  </div>
  <!-- <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" class="form-control" value="{{$title}}" name="title" >
  </div> -->
  <button type="submit" class="btn btn-primary">Add</button>
</form>


@include('shared.errors')
@endsection