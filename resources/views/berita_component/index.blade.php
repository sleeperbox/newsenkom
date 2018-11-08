@extends ('berita_layout')

@section ('content')
        <!-- Page Content -->
 <style type="text/css">

input[type="text"],
input[type="date"],
input[type="number"],
input[type="text"],
select.form-control {
  background: transparent;
  border: none;
  border-bottom: 1px solid #000000;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0;
}

input[type="text"]:focus,
select.form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}

 </style>

	<div class="container">
        <div class="section" style="margin-top: -7%"">
        <section class="details-books py-5">
            <div class="container py-md-4 mt-md-3">
            <h2 class="heading-agileinfo">Berita <span>Pengisian data Berita</span></h2>
                <span class="w3-line black"></span>
            </div>
            <div class="row">
            	<div class="col-sm-7">
            	</div>
            	<div class="col-sm-5">
            	</div>
            </div>
        </section> 
        </div>
 	</div>
	<!-- ROW -->
	<div class="row">

		<!-- FEED BERITA -->
		<div class="col-sm-7">

			<div class="responsive-table">
				<form action="{{ url('/berita') }}" method="post">
            	{{ csrf_field() }}
                	<?php
                    	$tgl = date('Y-m-d');
                    	$tanggal = $tgl;
                	?>
					<center><h6 class="media-meta pull-right">Tanggal Sekarang : <?php echo $tanggal; ?></h6></center>
					<hr><br />
					<input type="date" name="tgl" placeholder="Masukan Tanggal" style=" width: 100%;">
					<!-- <input type="submit" > -->
					<button class="btn btn-primary" type="submit" style=" width: 100%;">Kirim</button>
					<br /> 
				</form>

				<center>
				<ul class="list-group w3-agile">
				  @foreach($data as $datas)
				    <li class="list-group-item">
				      <!-- <img src="images/yuna.jpg" alt="" class="circle"> -->
				      <span class="title">{{$datas->callsign}} - {{$datas->tlp}}</span>
				      <p>{{$datas->pesan}}</p>
				    </li>
				    @endforeach
				</ul>
				</center>
				<center>{{ $data->links() }}</center>
			</div>
		</div>


		<!-- FORM BERITA -->
		<hr />
		<div class="col-sm-5">
			<div class="container">
			<p style="color: black; text-align: center;">Kirim Berita</p>
						<br />
				<div class="row">
						
							@if (Session::has('message'))0
	                		<div class="alert alert-danger">{{ Session::get('message') }}</div>
	                			@endif
							<form method="post" action="{{ url('/berita/kirim') }}" class="form-berita" style="color: black; width: 120%">
								{{ csrf_field() }}

						              	<div class='form-group'>
							              	<input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
							              
											<input type="text" id="inputCallsign" class="form-control" name="callsign" placeholder="CallSign" require>
											<!-- <label for="callsign">CallSign *</label> -->
						              	</div>
						            
										<div class='form-group'>
											<input type="number" id="inputTlp" class="form-control" name="tlp" placeholder="No TLP/HP" required>
											<!-- <label for="tlp">Tlp / Hp</label> -->
										</div>
									
										<div class="form-group">
											<input type="text" id="inputPesan" class="form-control" name="pesan" placeholder="Isi Pesan" required>
											<!-- <label for="pesan">Isi Pesan</label>	 -->
										</div>
									
										<div class="form-group"><center>
											<div class="g-recaptcha" data-sitekey="6Lf3uncUAAAAAFG9Kjj73nHywpvrgxDbBT0fEIu3" ></div></center>
										</div>
									

									<button class="btn btn-primary" type="submit" style=" width: 100%;">Kirim</button>
							
							</form>
				</div>
			</div>
		</div>
	
	</div>
</div>


@endsection

@section ('footer')

@endsection