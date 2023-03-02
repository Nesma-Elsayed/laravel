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
    <h1  class=" text-center ">All Users</h1>

    <div  class="row justify-content-center">
   
        <table class="m-5 text-center table" style="width:50%">
                <thead class="thead-dark">
                <tr class="text-center">
                    <th>Name</th>
                     <th>Email</th> 
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                        <tr >
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td> <a href="{{route('viewuser',$user->id)}}"><button class="btn btn-info">View</button></a> 
                               
        
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex">
            <div class="mx-auto">
              {{ $users->links() }} 
            </div>
          </div>

</body>
</html>