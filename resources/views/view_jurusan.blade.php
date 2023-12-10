<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-5">
    <h1>Data Jurusan</h1>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID Jurusan</th>
      <th scope="col">Nama Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($data_jurusan as $row)
    <tr>
      <td>{{$row->id_jurusan}}</td>
      <td>{{$row->nama_jurusan}}</td>
      <td><a class="btn btn-success" href="{{ url('jurusan/edit').'/'.$row->id_jurusan.'/edit' }}" role="button">Edit</a> 
      <a class="btn btn-danger" href="{{ url('jurusan').'/'.$row->id_jurusan.'/delete' }}" role="button" onclick="return confirm('Seriuski mau hapus?')">Hapus</a></td>
    </tr>
  @endforeach
  </div>

  <div>
  <a class="btn btn-primary" href="{{url('jurusan/create')}}">Tambah Data</a>
  </div>

  </tbody>
</table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>