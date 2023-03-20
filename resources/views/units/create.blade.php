<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-3">Create Units Page</h1><hr>
        <a href="{{ url('units/index') }}" class="btn btn-primary mt-5">View Unit</a>
        <form class="mt-5" action="{{ url('units/store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <input name="name" type="text" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <select name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
            </div>
            <div class="mb-3">
                <textarea name="description" class="form-control" placeholder="Description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>