<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<body>
    <h2>Post Info</h2>

    <p>Title:- {{ $post->Title }}</p>
    <p>Description:- {{$post->Description }} </p>
   <h2>Post Creator Info</h2>
   <p>Name:- {{ $post->user->name }} </p>
   <p>Email:- {{ $post->user->email }}</p>
   <p>Created at:- {{ $post->created_at }}</p>


</body>
</html>