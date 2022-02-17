<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <form class="m-5" method="post" action="/posts/{{$post->id}}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input type="text" name="description" value="{{$post->description}}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </body>
</html>
