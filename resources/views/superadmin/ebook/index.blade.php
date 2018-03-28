@extends ('superadmin.master._layout')
@section ('body')
  
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Ebook</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/superadmin')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Data Ebook</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                       
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                       <a href="{{url('/createebookadmin')}}" class="btn btn-primary"> Tambah Akun <i class="fa fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <?php $i=1; ?>
                          
                          <thead>
                            <tr>
                            <th>#</th>
                              <th>Nama</th>
                              <th>Nama File</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($ebook as $eb)
                              <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$eb->nama}}</td>
                                <td>{{$eb->nama_file}}</td>
                                <td>{{$eb->status}}</td>
                            </tr>
                             @endforeach
                          </tbody>
                         
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
          
@endsection