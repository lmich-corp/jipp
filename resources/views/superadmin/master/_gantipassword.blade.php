<div class="form-group">
	{!! Form::label('password', 'Password') !!}
	{!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Masukkan Password']); !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Password Baru') !!}
	{!! Form::password('password_baru', ['class' => 'form-control', 'placeholder' => 'Masukkan Password']); !!}
</div>

<div class="form-group">
	{!! Form::label('password', 'Konfirmasi Password') !!}
	{!! Form::password('password_konfirmasi', ['class' => 'form-control', 'placeholder' => 'Masukkan Password']); !!}
</div>
		
<div class="form-group" align="right">
	{!!Form::button(
	    '<span class="fa fa-plus"></span> Ganti Password',
	    array(
        'class'=>'btn btn-danger',
       'type'=>'submit')) 
		!!}
</div>