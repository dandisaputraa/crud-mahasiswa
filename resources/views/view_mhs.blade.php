<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tugas 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="gaya2.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo4.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
          JalanJajan.ID
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
          </ul>
          <form class="d-flex ms-auto">
            <a role="button" class="btn btn-light me-2" type="button" href="index.php"><i class="fa-solid fa-right-from-bracket"></i></i>Logout</a>
          </form>
        </div>
      </div>
    </nav>

<div class="container mt-5">
<div class="row">
    <div class="col-md-12">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Detail Makanan
                    <a href="{{url('mahasiswa/create')}}" class="btn btn-primary float-end">Add Data</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
    
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">NIM</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Alamat</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($data_mhs as $row)
                                <tr>
                                  <td scope="row">{{$loop->iteration}}</td>
                                  <td>{{$row->nim}}</td>
                                  <td>{{$row->nama}}</td>
                                  <td>{{$row->alamat}}</td>
                                  <td>{{$row->kodejurusan}}</td>
                                  <td><a class="btn btn-success" href="{{url('mahasiswa/'.$row->nim.'/edit')}}" role="button">Edit</a> 
                                  <a class="btn btn-danger" href="{{url('mahasiswa/'.$row->nim.'/delete')}}" role="button" onclick="return confirm('Seriuski mau hapus?')">Hapus</a></td>
                                </tr>
                              @endforeach
                          </div>

                        <!-- <div>
                        <a class="mb-2 btn btn-primary" href="{{url('mahasiswa/create')}}" role="button">Tambah Data</a>
                        </div> -->

                        </tbody>
                    
                </table>

            </div>
        </div>
    </div>
</div>

</div>


    </body>

</html>