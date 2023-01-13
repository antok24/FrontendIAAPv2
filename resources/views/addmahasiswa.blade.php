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

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mt-2">
            <h5 class="card-header">Add Mahasiswa</h5>
            <div class="card-body">
                <form action="{{route('storemahasiswa')}}" method="POST" class="form-horizontal">
                @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-1">
                        <label for="inputPassword6" class="col-form-label">NIM</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" name="nim" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-auto">
                        <div class="col-md-1">
                        <label for="inputPassword6" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" name="nama" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-auto">
                        <div class="col-md-1">
                        <label for="inputPassword6" class="col-form-label">Prodi</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" name="prodi" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-auto">
                        <div class="col-md-1">
                        <label for="inputPassword6" class="col-form-label">Fakultas</label>
                        </div>
                        <div class="col-auto">
                        <input type="text" name="fakultas" class="form-control" aria-describedby="passwordHelpInline">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center mt-auto">
                        <div class="col-md-1">
                        <label for="inputPassword6" class="col-form-label">Nomor Hp</label>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="hp" class="form-control" aria-describedby="passwordHelpInline">
                            @if ($errors->has('hp'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('hp') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="row g-3 align-items-center mt-auto">
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>