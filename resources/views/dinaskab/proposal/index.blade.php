@extends ('dinaskab.master._layout')
@section ('body')
  
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Proposal</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/admin')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Data Proposal</li>
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
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Proposal</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <?php $i=1; ?>
                          <thead align="center">
                            <tr>
                            <th>#</th>
                              <th>Judul</th>
                              <th>Kategori</th>
                              <th>Nama Penghargaan</th>
                              <th>Lokasi Penerapan</th>
                              <th>Pilihan</th>
                            </tr>
                          </thead>
                          <tbody align="center">
                             @foreach($proposal->proposal as $proposal)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                
                                <td>{{$proposal->judul}}</td>
                                <td>{{$proposal->kategori}}</td>
                                
                                <td>
                                  @foreach($penghargaan as $penghargaan)
                                  {{$penghargaan->nama}}
                                  <a href="{{url('dinaskab/cekpenghargaan/'.$penghargaan->id)}}" data-toggle="tooltip" title="Detail Penghargaan" class="fa fa fa-bars fa-lg" style="color: black"></a>
                                  @endforeach
                                </td>
                                <td >
                                  @foreach($penerapan as $penerapan)
                                  {{$penerapan->lokasi}}
                                  <a href="{{url('dinaskab/cekpenerapan/'.$penerapan->id)}}" data-toggle="tooltip" title="Detail Penerapan" class="fa fa fa-bars fa-lg" style="color: blue"></a>                             
                                  
                                  @endforeach
                                </td >
                                <td>
                                  <a href="{{url('dinaskab/cekproposal/'.$proposal->id)}}" data-toggle="tooltip" title="Lihat Proposal" class="fa fa fa-info fa-lg" style="color: red"><i class="fa fa fa-bars fa-sm"></i></a>
                                </td>

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