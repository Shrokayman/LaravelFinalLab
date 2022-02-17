<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <a class="btn btn-primary m-2" href="/users/create" role="button">Add new user</a>
        <table class="table m-3">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Joined at</th>
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td><a href="/users/{{$user->id}}">Show</a></td>
                    <td><a href="/users/{{$user->id}}/edit">Edit</a></td>
                    <td>
                        <form method="post" action="/users/{{$user->id}}">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Delete" >
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
