@extends ('dinaskab.master._layout')
@section ('body')
  
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Inovator</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admins')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Data Inovator</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Pilihan <i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="{{url('/createinovator')}}" class="dropdown-item edit"> <i class="fa fa-plus"></i>Tambah Inovator</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Inovator</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <?php $i=1; ?>
                          <thead>
                            <tr>
                            <th>#</th>
                              <th>Nama</th>
                              <th>NIK</th>
                              <th>NIP</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($inovator->inovator as $inov)
                              <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$inov->nama}}</td>
                                <td>{{$inov->nik}}</td>
                                <td>{{$inov->nip}}</td>
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