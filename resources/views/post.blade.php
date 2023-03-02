<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>
/* table, th, td {
  border:1px solid black;
} */

.topnav {
  overflow: hidden;
  background-color: black;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

</style>
</head>
<body>

<div class="topnav">
  <a href="#news">ITI blog</a>
  <a href="#news">All posts</a>

</div>

<br>
<div class="container text-center">
   <a href="{{ route('post.create') }}"><button class="btn btn-success ">Create</button></a> 
   <a href="{{ route('user') }}"><button class="btn btn-success ">All Users</button></a> 

</div>

<div  class="row justify-content-center">
   
<table class="m-5 text-center table" style="width:50%">
        <thead class="thead-dark">
        <tr class="text-center">
            <th>Title</th>
             <th>posted by</th> 
            <th>Created at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
                <tr >
                    <td>{{ $post->Title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td> <a href="viewpost/{{$post->id}}"><button class="btn btn-info">View</button></a> 
                        <form action="{{ route('post.update', $post->id) }}" style="display:inline-block">
                            @csrf()
                            <button class="btn  btn-primary" type="submit">Edit</button>
                        </form>
                      

                        <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline-block">
                            @method('DELETE')
                            @csrf()
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
    </table>

</div>
<div class="d-flex">
  <div class="mx-auto">
    {{ $posts->links() }} 
  </div>
</div>
    
</body>
</html>