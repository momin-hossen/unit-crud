<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Units</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
      <h1 class="text-center mt-3">All Units Page</h1><hr>
        <a href="{{ url('units/create') }}" class="btn btn-primary mt-5">Creat Unit</a>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($units as $unit)
                  <tr>
                    <td>{{ $unit->id }}</td>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->status }}</td>
                    <td>{{ $unit->description }}</td>
                    <td>
                      <a href="" class="btn btn-sm btn-info">Edit</a>
                      <a href="{{ url('units/delete').'/'.$unit->id }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
              @endforeach
            </tbody>
          </table>
    </div>

</body>
</html>