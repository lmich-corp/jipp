		<div class="form-group">
			{!! Form::label('nama', 'Nama <span class="fa fa-edit"></span>', [], false) !!}
			{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama' ]) !!}
		</div>

		<div class="form-group">
            {!! Form::label('nama_file', 'Pilih Ebook <span class="fa fa-upload"></span>', [], false) !!}

            {!! Form::file('nama_file',['class' => 'form-control ']); !!}

        </div>
		
		<div class="form-group" align="right">
					{{ Form::button(
				    '<span class="fa fa-plus"></span> Tambah E-book',
				    array(
				        'class'=>'btn btn-danger',
				        'type'=>'submit')) 
				}}
		</div>


		