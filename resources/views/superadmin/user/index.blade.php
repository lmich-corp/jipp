@extends ('superadmin.master._layout')
@section ('body')
  
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Akun</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/superadmin')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Data Akun</li>
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
                      <a href="{{url('/createuser')}}" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Akun</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover" id="dataTable">
                          <?php $i=1; ?>
                          <thead>
                            <tr>
                            <th>#</th>
                              <th>Nama</th>
                              <th>Username </th>
                              <th>Level</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($user as $user)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>
                                {{ $user->admin['nama'] }}

                                {{ $user->inovator['nama'] }}

                                {{ $user->dinasprov['nama'] }}

                                {{ $user->dinaskab['nama'] }}

                                {{ $user->superadmin['nama'] }}

                                
                                </td>
                                <td>
                                  {{ $user->username }}
                                  
                                </td>
                                <td>{{$user->role}}</td>
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