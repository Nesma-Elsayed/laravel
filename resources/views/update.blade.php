<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="row justify-between justify-content-center m-5">

    <form action="{{route('post.edit',$post->id)}}" method="POST" style="width:50%">
        @method('PUT')
        @csrf
        <label class="form-label" for="Title">Title</label>
        <input type="text" class="form-control" name="Title" value="{{ $post->Title }}">
        {{-- <label class="form-label" for="creator_id">creator_id</label>
        <input type="text" class="form-control" name="creator_id" value="{{ $post->user_id }}"> --}}
        <label class="form-label" for="Description">Description</label>
        <input type="text" class="form-control" name="Description" value="{{ $post->Description }}">
       
        <div class="container text-center">
            <input class="btn btn-primary m-3" type="submit">

            </div>

    </form>
    </div>
</body>

</html>