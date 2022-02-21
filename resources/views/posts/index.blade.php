
    @extends("site_layouts.app")  
    @section('sidebar')
    @parent
    <h2> New </h2>
    @endsection

    @section('content')

<a href="{{route('posts.create')}}">Add New post </a>
<table class="table">
<tr>  
    <th>  id </th>
    <th> User Name  </th>
    <th> User Email  </th>
    <th> Title  </th>
    <th> Description  </th>
    <th>  Created At </th>
 </tr>
 @foreach ($posts as $post)
<tr> 

<td>   {{ $post->id }}  </td> 
<td>   {{ $post->user->name??null}}  </td> 
<td>   {{ $post->user->email??null}}  </td> 
<td>   {{ $post->title}}  </td> 
<td>   {{ $post->description }}  </td> 
<td>   {{ $post->created_at}}  </td>  
<td>  <a href="/posts/{{ $post->id}} "> Show </a></td>
<td>  <a href="/posts/{{ $post->id}}/edit  "> Edit </a></td>
<td> 
    <form action="/posts/{{ $post->id}}" method="post">  
        @csrf
       @method('DELETE')
        <input type="submit" name="delete" value="Delete">
    </form>
</td>


</tr>

@endforeach

@endsection