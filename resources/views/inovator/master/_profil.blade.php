<div class="form-group">
	{!! Form::label('nama', 'Nama') !!}
	{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
</div>
<div class="form-group">
	{!! Form::label('nik', 'NIK') !!}
	{!! Form::text('nik', null, ['class'=>'form-control', 'placeholder' => 'Masukkan NIK']) !!}
</div>
<div class="form-group">
	{!! Form::label('nip', 'NIP') !!}
	{!! Form::text('nip', null, ['class'=>'form-control', 'placeholder' => 'Masukkan NIP']) !!}
</div>
<div class="form-group">
	{!! Form::label('jabatan', 'Jabatan') !!}
	{!! Form::text('jabatan', null, ['class'=>'form-control', 'placeholder' => 'Masukkan jabatan']) !!}
</div>
<div class="form-group">
	{!! Form::label('lembaga', 'Lembaga') !!}
	{!! Form::text('lembaga', null, ['class'=>'form-control', 'placeholder' => 'Masukkan lembaga']) !!}
</div>
<div class="form-group">
	{!! Form::label('alamat', 'Alamat') !!}
	{!! Form::text('alamat', null, ['class'=>'form-control', 'placeholder' => 'Masukkan alamat']) !!}
</div>
<div class="form-group">
	{!! Form::label('no_telp', 'No Telp/HP') !!}
	{!! Form::text('no_telp', null, ['class'=>'form-control', 'placeholder' => 'Masukkan No Telp/HP']) !!}
</div>

<div class="form-group" align="right">
			{!!Form::button(
		    '<span class="fa fa-plus"></span> Update Profil',
		    array(
		        'class'=>'btn btn-danger',
		        'type'=>'submit')) 
		!!}
</div>
