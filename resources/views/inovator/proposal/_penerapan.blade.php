{!! csrf_field() !!}
<div class="form-group">
	{!! Form::label('lokasi', 'Lokasi Penerapan<span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::text('lokasi', null, ['class'=>'form-control', 'placeholder' => 'Lokasi Penerapan' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('hasil', 'Hasil Penerapan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::textarea('hasil', null, ['class'=>'form-control tes', 'placeholder' => 'Hasil Penerapan' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('foto', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}

	{!! Form::file('foto',['class' => 'form-control ']); !!}

</div>
<div class="form-group">
	{!! Form::label('video', 'Url Video Penerapan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::text('video', null, ['class'=>'form-control', 'placeholder' => 'Url Video Penerapan' ]) !!}
</div>

<div class="form-group" align="right">
	{{ Form::button(
		'<span class="fa fa-plus"></span> Simpan',
		array(
		'class'=>'btn btn-danger',
		'type'=>'submit')) 
	}}
</div>