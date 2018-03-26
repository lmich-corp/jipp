<div class="form-group">
	{!! Form::label('nama', 'Nama') !!}
	{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
</div>
<div class="form-group">
			{!! Form::label('role', 'Kategori') !!}
			{!! Form::select('role', [ 
				'-' => 'Pilih Kategori',
				'superadmin' => 'Superadmin',
				'admin' => 'Admin',
				], null, 
				['class'=>'form-control']) !!}
		
</div>
<div class="form-group">
	{!! Form::label('name', 'Username') !!}
	{!! Form::text('username', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Username']) !!}
</div>

<div class="form-group">
	{!! Form::label('Email', 'Email') !!}
	{!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Email']) !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Masukkan Password']); !!}
</div>

<div class="form-group" align="right">
			{!!Form::button(
		    '<span class="fa fa-plus"></span> Tambah Akun',
		    array(
		        'class'=>'btn btn-danger',
		        'type'=>'submit')) 
		!!}
</div>
