<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <a class="btn btn-primary m-2" href="/posts/create" role="button">Add new post</a>
        <table class="table m-3">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created at</th>
                <th>User name</th>
            </tr>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->user->name}}</td>
                    <td><a href="/posts/{{$post->id}}">Show</a></td>
                    <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                    <td>
                        <form method="post" action="/posts/{{$post->id}}">
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
