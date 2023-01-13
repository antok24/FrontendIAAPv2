<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h3 class="d-flex justify-content-center">
            Vue JS Front End
        </h3>
        <h5 class="d-flex justify-content-center">
            Data Mahasiswa Studi Kasus IAAP
        </h5>

        <nav class="navbar navbar-expand-sm bg-light navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item m-1">
                    <a class="btn btn-light btn-outline-primary"
                    href="/">Data Mahasiswa</a>
                </li>
                <li class="nav-item m-1">
                    <a class="btn btn-light btn-outline-primary"
                    href="/mahasiswa">Add Mahasiswa</a>
                </li>
            </ul>
        </nav>

        <div class="card mt-2">
            <h5 class="card-header">Data Mahasiswa</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Fakultas</th>
                        <th scope="col">HP</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($datas['data'] as $data)
                      <tr>
                        <th scope="row">{{ $data->userId }}</th>
                        <td>{{ $data['id'] }}</td>
                        <td>{{ $data['title'] }}</td>
                        <td>{{ $data['title'] }}</td>
                        <td>{{ $data['title'] }}</td>
                        <td>{{ $data['title'] }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>