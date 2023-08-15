@extends('main')

     @section('portofolio')
    
     {{-- <section id="projects">
        <div class="container" style="margin-top: 4em ">
            <div class="row text-center mb-3 ">
                <div class="col">
                    <h2>Projek Saya</h2>
                </div>
            </div>
            <div class="row justify-content-center" style="text-align: center">
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Potret 1</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Potret 2</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Potret 3</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" >
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Potret 4</p>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mb-1">
                    <div class="card" >
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text" >Potret 5</p>
                        </div>
                      </div>
                </div>  
            </div>
        </div>
       
    </section> --}}
    <body class="bg-light" style="margin-top: 4em ">
    <main class="container">
       <!-- START FORM -->
       <form action='{{ url('mahasiswa') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nim' value="{{ Session::get('nim') }}" id="nim">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ Session::get('nama') }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="{{ Session::get('jurusan') }}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
          </form>
        </div>
        <!-- AKHIR FORM -->
        
        <!-- START DATA -->
        <div class="my-3 p-3 bg-body rounded shadow-sm">
                <!-- FORM PENCARIAN -->
                <div class="pb-3">
                  <form class="d-flex" action="" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <div class="pb-3">
                  <a href='{{ url('portofolio') }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">NIM</th>
                            <th class="col-md-4">Nama</th>
                            <th class="col-md-2">Jurusan</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      {{-- @foreach ($data as $item)
                      <tr>
                        <td>1</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jurusan }}</td>
                        <td>
                            <a href='' class="btn btn-warning btn-sm">Edit</a>
                            <a href='' class="btn btn-danger btn-sm">Del</a>
                        </td>
                    </tr>
                      @endforeach --}}
                        
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>

     @endsection