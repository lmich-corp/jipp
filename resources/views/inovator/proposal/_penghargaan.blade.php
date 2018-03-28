{!! csrf_field() !!}
<div class="form-group">
	{!! Form::label('nama', 'Nama Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Nama Penghargaan' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('tahun', 'Tahun Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::text('tahun', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Tahun Penghargaan' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('sifat', 'Sifat Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::text('sifat', null, ['class'=>'form-control', 'placeholder' => 'Sifat Penghargaan' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('keterangan', 'Keterangan Penghargaan <span class="fa fa-edit"></span>', [], false) !!}
	{!! Form::textarea('keterangan', null, ['class'=>'form-control tes', 'placeholder' => 'Jelaskan tentang penghargaan proposal anda' ]) !!}
</div>

<div class="form-group">
	{!! Form::label('foto', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}

	{!! Form::file('foto',['class' => 'form-control ']); !!}

</div>
<div class="form-group">
	{!! Form::label('foto1', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}

	{!! Form::file('foto1',['class' => 'form-control ']); !!}

</div>
<div class="form-group">
	{!! Form::label('foto2', 'Foto Penerapan <span class="fa fa-upload"></span>', [], false) !!}

	{!! Form::file('foto2',['class' => 'form-control ']); !!}

</div>


<div class="form-group" align="right">
	{{ Form::button(
		'<span class="fa fa-plus"></span> Simpan',
		array(
		'class'=>'btn btn-danger',
		'type'=>'submit')) 
	}}
</div>

