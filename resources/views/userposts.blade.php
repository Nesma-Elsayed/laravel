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
    <div class="text-center">
    <h1>Creator info</h1>
    <p>Name: {{ $user[0]->name}} </p>
    <p>Email: {{$user[0]->email}}</p>
    </div>

<h3 class="text-center">Creator Posts</h3>
<div  class="row justify-content-center">
    <table class="m-5 text-center table" style="width:50%">
        <thead class="thead-dark">
        <tr class="text-center">
            <th>Title</th>
             <th>Describtion</th> 
            <th>Created at</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($user[0]->post as $post)
                <tr>
                    <td>{{$post->Title }}</td>
                    <td>{{ $post->Description }}</td>
                    <td>{{ $post->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
    </table>

</div>

</body>
</html>