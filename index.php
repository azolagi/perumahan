<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Informasi - Grand Metro Indihiang</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
		<?php 
	include "config.php";
		?>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sistem Informasi</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Tipe Rumah</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Peta Lokasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <img class="masthead-avatar mb-5" src="assets/img/grand.png" alt="" / style="width:400px;height:300px;">
                <h1 class="masthead-heading text-uppercase mb-0">Grand Metro Indihiang</h1>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <p class="masthead-subheading font-weight-light mb-0">Memberikan Kepuasan dan Kenyamanan Bagi Pemiliknya</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Spesifikasi Type Rumah</h2>
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-5">				
					<?php 		
					$query = mysqli_query($dbconnect, "SELECT * FROM data WHERE id = '' ") or die(mysqli_error());		
					while($data = mysqli_fetch_array($query)) { ?>			
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <td><?php echo "<img src='login/on-admin/gambar/$data[gambar]' width='300' height='300' />";?></td> 
						<td><?php echo $data['Deskripsi']; ?></td>
					   </div>					
						<?php
						} ?>									
                    </div>  
                    <div class="col-md-6 col-lg-4 mb-5">				
					<?php 		
					$query = mysqli_query($dbconnect, "SELECT * FROM data WHERE id = '' ") or die(mysqli_error());		
					while($data = mysqli_fetch_array($query)) { ?>			
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <td><?php echo "<img src='login/on-admin/gambar/$data[gambar]' width='300' height='300' />";?></td> 
							
                        </div>					
						<?php
						} ?>									
                    </div>  
                    <div class="col-md-6 col-lg-4 mb-5">				
					<?php 		
					$query = mysqli_query($dbconnect, "SELECT * FROM data WHERE id = '' ") or die(mysqli_error());		
					while($data = mysqli_fetch_array($query)) { ?>			
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <td><?php echo "<img src='login/on-admin/gambar/$data[gambar]' width='300' height='300' />";?></td> 
                        
						</div>						
						<?php
						} ?>									
                    </div>  
                </div>
            </div>
        </section>
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <h2 class="page-section-heading text-center text-uppercase text-white">Peta Lokasi</h2>
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
							<div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">                                                     
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1176.6121578042907!2d108.18817213709426!3d-7.2822162419331935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f51ccd02a03ed%3A0xe95ee16669f81486!2sGrand%20Metro%20Indihiang!5e0!3m2!1sen!2sus!4v1607509030966!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lokasi</h4>
                        <p class="lead mb-0">
                            Jalan Gunung Manggu No.11 Sukamajukaler
							<br />
							Kecamatan Indihiang Tasikmalaya 
                            <br />
                            Jawa Barat 46151 
							<br />
							Indonesia
                        </p>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Sosial Media</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/perumahansubsid/"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Kontak</h4>
                        <p class="lead mb-0">
                            0811-2110-611
							<br />
                            0813-8130-0825
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>3D Model<br/> TIPE RUMAH 32/72</h2>
                                    <iframe src="https://3dwarehouse.sketchup.com/embed/7f47f84e-a406-4c7f-bf32-af673f1172a0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen></iframe>
									<br> <br/>
									<div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
									<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>Denah Tanah<br/> TIPE RUMAH 32/72</h2>
									<img class="img-fluid" src="assets/img/portfolio/denah.jpg" alt="" />
									<br>	
									<br>									
									<h2>Keterangan</h2>
										<p class="justify">
										Luas Bangunan : 32m2
										<br>
										Luas Lahan : 72m2
										<br>
										Kamar Tidur : 2
										<br>
										Kamar Mandi : 1
										<p/>
									<h3>Bahan / Material</h3>
										<p class="justify">
										A. Atap : Beton
										<br>
										B. Dinding : Bata merah diplester dan cat
										<br>
										C. Lantai & Pondasi : Keramik & Batu kali
										<br/>
										<p/>				
                            </div>
						</div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>3D Model<br/> TIPE RUMAH 32/72</h2>
                                    <iframe src="https://3dwarehouse.sketchup.com/embed/7f47f84e-a406-4c7f-bf32-af673f1172a0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen></iframe>
									<br> <br/>
									<div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
									<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>Denah Tanah<br/> TIPE RUMAH 32/72</h2>
									<img class="img-fluid" src="assets/img/portfolio/denah.jpg" alt="" />
									<br>	
									<br>									
									<h2>Keterangan</h2>
										<p class="justify">
										Luas Bangunan : 32m2
										<br>
										Luas Lahan : 72m2
										<br>
										Kamar Tidur : 2
										<br>
										Kamar Mandi : 1
										<p/>
									<h3>Bahan / Material</h3>
										<p class="justify">
										A. Atap : Beton
										<br>
										B. Dinding : Bata merah diplester dan cat
										<br>
										C. Lantai & Pondasi : Keramik & Batu kali
										<br/>
										<p/>				
                            </div>
						</div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
		 <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>3D Model<br/> TIPE RUMAH 32/72</h2>
                                    <iframe src="https://3dwarehouse.sketchup.com/embed/7f47f84e-a406-4c7f-bf32-af673f1172a0" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="580" height="326" allowfullscreen></iframe>
									<br> <br/>
									<div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
									<h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label"><br>Denah Tanah<br/> TIPE RUMAH 32/72</h2>
									<img class="img-fluid" src="assets/img/portfolio/denah.jpg" alt="" />
									<br>	
									<br>									
									<h2>Keterangan</h2>
										<p class="justify">
										Luas Bangunan : 32m2
										<br>
										Luas Lahan : 72m2
										<br>
										Kamar Tidur : 2
										<br>
										Kamar Mandi : 1
										<p/>
									<h3>Bahan / Material</h3>
										<p class="justify">
										A. Atap : Beton
										<br>
										B. Dinding : Bata merah diplester dan cat
										<br>
										C. Lantai & Pondasi : Keramik & Batu kali
										<br/>
										<p/>				
                            </div>
						</div>	
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>