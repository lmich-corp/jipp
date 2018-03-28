		<div class="form-group">
			{!! Form::label('nama', 'Nama') !!}
			{!! Form::text('nama', null, ['class'=>'form-control', 'placeholder' => 'Masukkan Nama']) !!}
		</div>
		<div class="form-group">
					{!! Form::label('role', 'Kategori') !!}
					{!! Form::select('role', [ 
						'-' => 'Pilih Kategori',
						'superadmin' => 'Superadmin',
						'admin' => 'Kabupaten / Kota',
						'dinasprov' => 'OPD Provinsi'
						], null, 
						['class'=>'form-control']) !!}
				
		</div>
		<div class="form-group">
					{!! Form::label('role', 'OPD') !!}
					{!! Form::select('opd', [ 
						'-' => 'Pilih OPD',
						'SETDA' => 'SEKRETARIAT DAERAH',
						'SET DPRD' => 'SEKRETARIAT DEWAN PERWAKILAN RAKYAT DAERAH',
						'INSPEKTORAT' => 'INSPEKTORAT',
						'DISDIKBUD'  => 'DINAS PENDIDIKAN DAN KEBUDAYAAN',
						'DINAS KESEHATAN' => 'DINAS KESEHATAN',
						'DPU BINMAR CIPKA' => 'DINAS PEKERJAAN UMUM BINA MARGA DAN CIPTA KARYA',  
						'DPU SDA TARU' => 'DINAS PEKERJAAN UMUM SUMBER DAYA AIR DAN TATA RUANG',
						'DISPERAKIM' => 'DINAS PERUMAHAN RAKYAT DAN KAWASAN PERMUKIMAN',
						'SATPOL PP' => 'SATUAN POLISI PAMONG PRAJA',
						'DINAS SOSIAL' => 'DINAS SOSIAL',
						'DISNAKERTRANS' => 'DINAS TENAGA KERJA DAN TRANSMIGRASI',
						'DPPPA DALDUK KB' => 'DINAS PEMBERDAYAAN PEREMPUAN, PERLINDUNGAN ANAK, PENGENDALIAN PENDUDUK DAN KELUARGA BERENCANA',
						'DISHANPAN' => 'DINAS KETAHANAN PANGAN',
						'DLHK' => 'DINAS LINGKUNGAN HIDUP DAN KEHUTANAN',
						'DISPERMADES DUKCAPIL' => 'DINAS PEMBERDAYAAN MASYARAKAT, DESA, KEPENDUDUKAN DAN PENCATATAN SIPIL',
						'DINAS PERHUBUNGAN' => 'DINAS PERHUBUNGAN',
						'DISKOMINFO' => 'DINAS KOMUNIKASI DAN INFORMATIKA',
						'DISKOP UKM ' => 'DINAS KOPERASI, USAHA KECIL DAN MENENGAH',
						'DPMPTSP' => 'DINAS PENANAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU',
						'DISPORAPAR' => 'DINAS KEPEMUDAAN, OLAHRAGA DAN PARIWISATA',
						'DINAS ARPUS' => 'DINAS KEARSIPAN DAN PERPUSTAKAAN',
						'DKP' => 'DINAS KELAUTAN DAN PERIKANAN',
						'DISTANBUN' => 'DINAS PERTANIAN DAN PERKEBUNAN',
						'DISNAK KESWAN' => 'DINAS PETERNAKAN DAN KESEHATAN HEWAN',
						'DINAS ESDM' => 'DINAS ENERGI DAN SUMBER DAYA MINERAL',
						'DISPERINDAG' => 'DINAS PERINDUSTRIAN DAN PERDAGANGAN',
						'BAPPEDA' => 'BADAN PERENCANAAN PEMBANGUNAN, PENELITIAN DAN PENGEMBANGAN DAERAH',
						'BPPD' => 'BADAN PENGELOLA PENDAPATAN DAERAH',
						'BPKAD' => 'BADAN PENGELOLA KEUANGAN DAN ASET DAERAH',
						'BKD' => 'BADAN KEPEGAWAIAN DAERAH',
						'BPSDMD' => 'BADAN PENGEMBANGAN SUMBER DAYA MANUSIA DAERAH',
						'BADAN PENGHUBUNG' => 'BADAN PENGHUBUNG',
						'BAKESBANGPOL' => 'BADAN KESATUAN BANGSA DAN POLITIK',
						'SET BPBD' => 'SEKRETARIAT BADAN PENANGGULANGAN BENCANA DAERAH',
						'RSUD Dr. MOEWARDI' => 'RUMAH SAKIT UMUM DAERAH Dr. MOEWARDI',
						'RSUD Prof. Dr. MARGONO SOEKARJO' => 'RUMAH SAKIT UMUM DAERAH Prof. Dr. MARGONO SOEKARJO',
						'RSUD TUGUREJO' => 'RUMAH SAKIT UMUM DAERAH TUGUREJO',
						'RSUD KELET' => 'RUMAH SAKIT UMUM DAERAH KELET',
						'RSJD Dr. AMINO GONDOHUTOMO' => 'RUMAH SAKIT JIWA DAERAH Dr. AMINO GONDOHUTOMO',
						'RSJD SURAKARTA' => 'RUMAH SAKIT JIWA DAERAH SURAKARTA',
						'RSJD SOEDJARWADI' => 'RUMAH SAKIT JIWA DAERAH Dr. RM. SEODJARWADI'
						
						], null, 
						['class'=>'form-control']) !!}
				
		</div>
		<div class="form-group">
					{!! Form::label('kabupaten', 'Kabupaten / Kota') !!}
					{!! Form::select('kabupaten', [ 
						'-' => 'Pilih Kabupaten / Kota',
						' Banjarnegara'=> 'Banjarnegara',
						' Banyumas'=> 'Banyumas',
						' Batang'=> 'Batang',
						' Blora'=> 'Blora',
						' Boyolali'=> 'Boyolali',
						' Brebes'=> 'Brebes',
						' Cilacap'=> 'Cilacap',
						' Demak'=> 'Demak',
						' Grobogan'=> 'Grobogan',
						' Jepara'=> 'Jepara',
						' Karanganyar'=> 'Karanganyar',
						' Kebumen'=> 'Kebumen',
						' Kendal'=> 'Kendal',
						' Klaten'=> 'Klaten',
						' Kudus'=> 'Kudus',
						' Magelang'=> 'Magelang',
						' Pati'=> 'Pati',
						' Pekalongan'=> 'Pekalongan',
						' Pemalang'=> 'Pemalang',
						' Purbalingga'=> 'Purbalingga',
						' Purworejo'=> 'Purworejo',
						' Rembang'=> 'Rembang',
						' Semarang'=> 'Semarang',
						' Sragen'=> 'Sragen',
						' Sukoharjo'=> 'Sukoharjo',
						' Tegal'=> 'Tegal',
						' Temanggung'=> 'Temanggung',
						' Wonogiri'=> 'Wonogiri',
						' Wonosobo'=> 'Wonosobo',
						' Magelang_kota'=> 'Kota Magelang',
						' Pekalongan_kota'=> 'Kota Pekalongan',
						' Salatiga'=> 'Kota Salatiga',
						' Semarang_kota'=> 'Kota Semarang',
						' Surakarta_kota'=> 'Kota Surakarta',
						' Tegal_kota'=> 'Kota Tegal'
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
