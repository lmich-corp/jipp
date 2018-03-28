@extends ('dinasprov.master._layout')
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
		<li class="breadcrumb-item"><a href="{{url('/dinasprov')}}">Beranda</a></li>
		<li class="breadcrumb-item active">Penghargaan Inovasi</li>
	</ul>
</div>
<section class="forms"> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-close">
						<div class="dropdown">
		                        <!-- <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
		                        	<div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div> -->
		                        </div>
		                    </div>
		                    <div class="card-header d-flex align-items-center">
		                    	<h3 class="h4">Penghargaan Inovasi</h3>
		                    </div>
		                    <div class="card-body" style="color: red">

		                    	{!! Form::model($penghargaan, array('url'=>array('penghargaanupdate', $penghargaan->id),'files'=>true, 'method'=>'patch')) !!}

		                    	{!! csrf_field() !!}
		                    	<div class="form-group">
		                    		{!! Form::label('nama', 'Nama Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
		                    		{!! Form::text('nama', null, ['class'=>'form-control']) !!}
		                    	</div>
		                    	<div class="form-group">
		                    		{!! Form::label('tahun', 'Tahun Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
		                    		{!! Form::text('tahun', null, ['class'=>'form-control']) !!}
		                    	</div>
		                    	<div class="form-group">
		                    		{!! Form::label('sifat', 'Sifat Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
		                    		{!! Form::text('sifat', null, ['class'=>'form-control' ]) !!}
		                    	</div>
		                    	<div class="form-group">
		                    		{!! Form::label('keterangan', 'Keterangan Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
		                    		{!! Form::textarea('keterangan', null, ['class'=>'form-control tes' ]) !!}
		                    	</div>

		                    	<div class="form-group">
		                    		{!! Form::label('foto', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}<br>

									<img src="{{ asset('proposal/'.$penghargaan->foto) }}"  style="max-width:400px;max-height:400px;" />

		                    	</div>
		                    	<div class="form-group">
		                    		{!! Form::label('foto1', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}<br>

									<img src="{{ asset('proposal/'.$penghargaan->foto1) }}"  style="max-width:400px;max-height:400px;" />

		                    	</div>
		                    	<div class="form-group">
		                    		{!! Form::label('foto2', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}<br>

									<img src="{{ asset('proposal/'.$penghargaan->foto2) }}"  style="max-width:400px;max-height:400px;" />
		                    	</div>
		                    	{!!Form::close() !!}
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</section>




		@endsection