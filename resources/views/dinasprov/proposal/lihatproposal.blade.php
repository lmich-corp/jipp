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
		<li class="breadcrumb-item active">Penerapan Inovasi</li>
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
		                    	<h3 class="h4">Penerapan Inovasi</h3>
		                    </div>
		                    <div class="card-body" style="color: red">

		                    	{!! Form::model($proposal, array('url'=>array('proposalupdate', $proposal->id),'files'=>true, 'method'=>'patch')) !!}

		                    	<div class="col-sm-12">
		                    		<div id="informasiutama">
		                    			<h4>Form Proposal</h4>
		                    			<!-- <link rel="stylesheet" href="custom.css"> -->
		                    			<div class="form-group">
		                    				{!! csrf_field() !!}

		                    				<label for="judul">Judul Proposal</label>
		                    				<input type="text" class="form-control" id="judul" name="judul" value="{{$proposal->judul}}">
		                    			</div>
		                    			<div class="form-group">
		                    				<label for="tanggal">Tanggal</label>
		                    				<input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$proposal->tanggal}}">
		                    			</div>


		                    			<div class="form-group">
		                    				<label for="kategori">Kategori</label>
		                    				<select class="form-control" name="kategori">
		                    					<option value="{{$proposal->kategori}}">{{$proposal->kategori}}</option>
		                    					<option value="Kesehatan" >Kesehatan</option>
		                    					<option value="Pendidikan" >Pendidikan</option>
		                    					<option value="Sosial" >Sosial</option>
		                    					<option value="PU dan Tata ruang" >PU dan Tata ruang</option>
		                    					<option value="Perumahan rakyat dan permukiman" >Perumahan rakyat dan permukiman</option>
		                    					<option value="Ketentraman ketertiban dan perlindungan masyarakat" >Ketentraman ketertiban dan perlindungan masyarakat</option>
		                    					<option value="Pangan, Lingkungan Hidup" >Pangan, Lingkungan Hidup</option>
		                    					<option value="Energi, Tata kelola pemerintahan, dan Ekonomi" >Energi, Tata kelola pemerintahan, dan Ekonomi</option>
		                    				</select>
		                    			</div>
		                    			<div id="ringkasan">
		                    				<h4><strong>Ringkasan</strong></h4>
		                    				<p>Ringkaslah proposal anda dalam 300 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="ringkasan" id="tes">{{$proposal->ringkasan}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="analisis">
		                    				<h4><strong>Analisis</strong></h4>
		                    				<p>Uraikan situasi yang ada sebelum inovasi pelayanan publik ini dimulai dalam 500 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="analisis" id="tes">{{$proposal->analisis}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="pendekatan">
		                    				<h4><strong>Pendekatan</strong></h4>
		                    				<p>Ringkaslah tentang apa dan bagaimana inovasi pelayanan publik ini telah memecahkan masalah, dan uraikan strateginya dalam 600 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="pendekatan" id="tes">{{$proposal->pendekatan}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="pelaksanaan">
		                    				<h4><strong>Pelaksanaan</strong></h4>
		                    				<p></p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="pelaksanaan" id="tes">{{$proposal->pelaksanaan}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="rencana">
		                    				<h4><strong>Rencana</strong></h4>
		                    				<p></p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="rencana" id="tes">{{$proposal->rencana}}</textarea>
		                    				</div>
		                    			</div>

		                    			<div id="kreatif">
		                    				<h4><strong>Kreatif dan Inovasi</strong></h4>
		                    				<p>Jelaskan bahwa inovasi pelayanan publik yang diajukan ini bersifat unik dan mampu menyelesaikan masalah dengan cara-cara baru dan berbeda dari metode sebelumnya serta berhasil diimplementasikan dalam 200 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="kreatif" id="tes">{{$proposal->kreatif_inovatif}}</textarea>
		                    				</div>
		                    			</div>

		                    			<div id="sumber">
		                    				<h4><strong>Sumber Daya</strong></h4>
		                    				<p>Sebutkan biaya untuk sumber daya keuangan, teknis, dan manusia yang berkaitan dengan inovasi pelayanan publik ini dalam 500 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="sumber" id="tes">{{$proposal->sumberdaya}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="keluaran">
		                    				<h4><strong>Keluaran</strong></h4>
		                    				<p>Sebutkan paling banyak lima keluaran konkret yang mendukung keberhasilan inovasi pelayanan publik ini dalam 400 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="keluaran" id="tes">{{$proposal->keluaran}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="pemantauan">
		                    				<h4><strong>Pemantauan</strong></h4>
		                    				<p>Uraikan bagaimana pelaksanaan inovasi pelayanan publik ini dipantau dan dievaluasi dalam 400 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="pemantauan" id="tes">{{$proposal->pemantauan}}</textarea>
		                    				</div>
		                    			</div>  
		                    			<div id="kendala">
		                    				<h4><strong>Kendala</strong></h4>
		                    				<p>Uraikan masalah utama yang dihadapi selama pelaksanaan inovasi pelayanan publik ini beserta cara penanggulangan dan penyelesaiannya dalam 300 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="kendala" id="tes">{{$proposal->kendala}}</textarea>
		                    				</div>  
		                    			</div>
		                    			<div id="manfaat">
		                    				<h4><strong>Manfaat</strong></h4>
		                    				<p>Uraikan dampak dari inovasi pelayanan publik ini dalam 700 kata, berikan beberapa pembuktian /data yang menunjukkan dampak/manfaat dari inovasi pelayanan publik ini</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="manfaat" id="tes">{{$proposal->manfaat}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="perbedaan">
		                    				<h4><strong>Perbedaan</strong></h4>
		                    				<p>uraikan perbedaan sebelum dan sesudah inovasi pelayanan publik ini dilakukan dalam 700 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="perbedaan" id="tes">{{$proposal->sebelum_sesudah}}</textarea>
		                    				</div>
		                    			</div>  
		                    			<div id="keselarasan">
		                    				<h4><strong>Keselarasan</strong></h4>
		                    				<p>Apa saja dari kegiatan inovasi tersebut yang sejalan dengan satu atau lebih dari 17 Tujuan Pembangunan Berkelanjutan? Jelaskan kegiatan inovasi tersebut selaras dengan pencapaian salah satu atau lebih Tujuan Pembangunan Berkelanjutan Jawaban disampaikan dalam paling banyak 300 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="keselarasan" id="tes">{{$proposal->keselarasan}}</textarea>
		                    				</div>
		                    			</div>  
		                    			<div id="pembelajaran">
		                    				<h4><strong>Pembelajaran</strong></h4>
		                    				<p>Uraikan pengalaman umum yang diperoleh dalam melaksanakan inovasi pelayanan publik ini, pembelajarannya, dan rekomendasi untuk masa depan dalam 500 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="pembelajaran" id="tes">{{$proposal->pembelajaran}}</textarea>
		                    				</div>
		                    			</div> 
		                    			<div id="berkelanjutan">
		                    				<h4><strong>Berkelanjutan</strong></h4>
		                    				<p>Uraikan bagaimana inovasi pelayanan publik ini sedang dilanjutkan, jelaskan apakah inovasi ini sedang direplikasi (transfer of knowledge) atau didiseminasi untuk seluruh pelayanan publik di tingkat instansi, daerah, nasional dan/atau internasional, dan jelaskan bagaimana inovasi pelayanan publik ini dapat direplikasi dalam 500 kata</p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="kelanjutan" id="tes">{{$proposal->kelanjutan}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div id="referensi">
		                    				<h4><strong>Referensi</strong></h4>
		                    				<p></p>
		                    				<div class="form-group">
		                    					<textarea class="form-control tes" name="referensi" id="tes">{{$proposal->referensi}}</textarea>
		                    				</div>
		                    			</div>
		                    			<div class="form-group">


		                    			</div>
		                    			
		                    		</div>
		                    		{!!Form::close() !!}
		                    	</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>




		    @endsection