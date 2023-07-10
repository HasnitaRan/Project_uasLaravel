<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulir Registrasi</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="formulirpendaftaran/css/nunito-font.css">
	<link rel="stylesheet" type="text/css" href="formulirpendaftaran/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="formulirpendaftaran/css/style.css"/>
</head>
<body>
	<div class="page-content">
		<div class="wizard-v5-content">
			<div class="wizard-form">
		        <form action="/storeanggota" method="POST" enctype="multipart/form-data" class="form-register" id="form-register">
					@csrf
					
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-check"></i></span>
			            	<span class="step-text">Identitas Pribadi</span>
			            </h2>
			            <section>
			                <div class="inner">
								<div class="form-row">
								<div class="form-holder">
										<label for="first_name">Nama </label>
										<input type="text" placeholder="" class="form-control" id="first_name" name="nama">
									</div>
									<div class="form-holder">
										<label for="last_name">NIM</label>
										<input type="text" placeholder="" class="form-control" id="last_name" name="nim">
									</div>
								</div>
								<div class="form-row">
									<div id="radio">
										<label for="gender">Gender:</label>
										<input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki
  										<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Tanggal Lahir:</label>

											<input type="date" name="tanggal_lahir" id="date" class="form-control" required>
				
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-3">
										<label for="phone">Nomer HP</label>
										<input type="text" placeholder="" class="form-control" id="phone" name="no_hp">
									</div>
									<div class="form-holder">
									<label for="email">Email Address:</label>
										<input type="email" name="email" class="email input-step-2-1" id="email" placeholder="ex: example@email.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="address">Alamat</label>
										<input type="text" placeholder="" class="form-control" id="address" name="alamat">
										<span><i class="zmdi zmdi-pin"></i></span>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label for="image">Pas Foto (3x4):</label>
										<input type="file" placeholder="" class="form-control input-step-2-2" id="image" name="image">
										<span class="card"></span>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
								
							</div>
			            </section>
						
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="formulirpendaftaran/js/jquery-3.3.1.min.js"></script>
	<script src="formulirpendaftaran/js/jquery.steps.js"></script>
	<script src="formulirpendaftaran/js/main.js"></script>
</body>
</html>