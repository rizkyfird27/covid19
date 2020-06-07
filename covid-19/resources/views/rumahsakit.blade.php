<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="rs.css">

    <title>COVID-19</title>
  </head>
  <body background="bg.jpg" >
    
      <div class="container"> 
          <h2 class="head text-center mt-2">Daftar Rumah Sakit Rujukan COVID-19</h2>
          <a href="{{ url('/rumahsakit/create') }}" class="btn btn-success">Tambah data Rumah Sakit</a>
          <table class="table table-primary mt-5">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Rumah Sakit</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Alamat</th> 
                <th scope="col">Telepon</th>
                <th scope="col">Fax</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
              @foreach ($rumahsakit as $row)
              <tr>
                <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->provinsi }}</td>
                <td>{{ $row->alamat }}</td>
                <td>{{ $row->telp }}</td>
                <td>{{ $row->fax }}</td>
                <td>
                <a href = "{{ url('/rumahsakit/' . $row->id . '/edit') }}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                <form action="{{ url('/rumahsakit/' . $row->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
                </td>
              </tr>
              @endforeach
            </thead>
          </table>
          <a href="{{ url('/home') }}" class="btn btn-success">Back</a>
      </div>
  </body>
</html>