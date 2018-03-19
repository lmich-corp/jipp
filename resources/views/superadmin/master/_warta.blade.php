	<div class="form-group">
			{!! Form::label('judul', 'Judul') !!}
			{!! Form::text('judul', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('isi', 'Isi Berita') !!}
		{!! Form::textarea('isi', null, ['class'=>'form-control']) !!}
	</div>
	<div class="form-group">
        {!! Form::label('gambar', 'Gambar') !!}
        {!! Form::file('gambar', ['class' => 'form-control']); !!}
    </div>
	<div class="form-group" align="right">
					{{ Form::button(
				    '<span class="fa fa-plus"></span> Tambah Warta',
				    array(
				        'class'=>'btn btn-danger',
				        'type'=>'submit')) 
				}}
	</div>
