
@extends ('inovator.master._layouts')
@section ('body')
	
          <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Inovator</h2>
            </div>
        </header>
          <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/inovator')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Form Inovator</li>
            </ul>
        </div>
		<section class="forms"> 
		    <div class="container-fluid">
		        <div class="row">
		        	<div class="col-lg-12">
	                  	<div class="card">
		                    <div class="card-close">
		                      <div class="dropdown">
		                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
		                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
		                      </div>
		                    </div>
		                    <div class="card-header d-flex align-items-center">
		                      <h3 class="h4">Penghargaan Inovasi</h3>
		                    </div>
		                    <div class="card-body" style="color: red">
								
								{!! Form::model($penghargaan, array('url'=>array('penghargaanupdate', $penghargaan->id),'files'=>true, 'method'=>'patch')) !!}
								@include('inovator.proposal._penghargaan')
								{!!Form::close() !!}
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>

	
		 

@endsection