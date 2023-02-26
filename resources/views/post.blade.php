<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}

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

<br><br>

    <table class="m-3 " style="width:50%">
        <thead>
        <tr>
            <th>title</th>
            <th>posted by</th>
            <th>created at</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)
                <tr >
                    <td>{{ $post->Title }}</td>
                    <td>{{ $post->Posted_By }}</td>
                    <td>{{ $post->Created_At }}</td>
                    <td> <a href="viewpost/{{$post->Id}}"><button class="btn btn-info">View</button></a> <button class="btn btn-primary">edit</button> <button class="btn btn-danger">delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
  
    </table>
    <script>
       
    </script>
</body>
</html>