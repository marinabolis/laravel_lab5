

     @extends("site_layouts.app")  
    @section('content')
<form action="/posts" method="post">
    @csrf
<!-- <div class="mb-3">
    <label  class="form-label">Id</label>
    <input type="text" class="form-control" name="id" >
  </div> -->
  <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text"  class="form-control"  name="title" value="{{ old('title') }}" >
  </div>
  <div class="mb-3">
    <label  class="form-label">Description</label>
    <input type="text"  class="form-control"  name="description"   value="{{ old('description') }}" >
  </div>
  <!-- <div class="mb-3">
    <label  class="form-label">Title</label>
    <input type="text" class="form-control"  name="title" >
  </div> -->
  <button type="submit" class="btn btn-primary">Add </button>
</form>


@include('shared.errors')
@endsection