<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<section id="content" class="slideshow-bg">
		<div id="slideshow">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slidebg" style="background-image: url('<?php echo base_url(); ?>gudang/images/slider/banner.jpeg');"></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div id="main">
				<h1 class="page-title">Terbang nyaman bersama kami</h1>
				<h2 class="page-description col-md-6 no-float no-padding">Dengan pelayanan yang memuaskan.</h2>
				<div class="search-box-wrapper style2">
					<div class="search-box">
						<ul class="search-tabs clearfix">
							<li class="active"><a  data-toggle="tab"><i class="soap-icon-plane-right takeoff-effect"></i><span>CARI TIKET PESAWAT</span></a></li>
							<!-- <li><a href="#flight-and-hotel-tab" data-toggle="tab"><i class="soap-icon-car"></i><span>TIKET KERETA API</span></a></li> -->
						</ul>
						<div class="visible-mobile">
							<ul id="mobile-search-tabs" class="search-tabs clearfix">
								<li class="active"><a>TIKET PESAWAT</a></li>
								<!-- <li><a href="#flight-and-hotel-tab">TIKET KERETA API</a></li> -->
							</ul>
						</div>
						<div class="search-tab-content"><!-- KOTAK PENCARIAN -->
							<!-- TIKET PESAWAT -->
							<div class="tab-pane fade active in" id="flights-tab">
								<form action="result" method="post">
									<h6 class="title"><b>Mau pergi ke mana om?</b></h6>
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<!-- <input type="text" class="input-text full-width" placeholder="Kota Keberangkatan" /> -->
												<select class="input-text full-width">
													<option>Kota Keberangkatan</option>
													<option>JAKARTA (JKT)</option>
													<option>YOGYAKARTA (YKT)</option>
													<option>SEMARANG (SMG)</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<!-- <input type="text" class="input-text full-width" placeholder="Kota Tujuan" /> -->
												<select class="input-text full-width">
													<option>Kota Tujuan</option>
													<option>JAKARTA (JKT)</option>
													<option>YOGYAKARTA (YKT)</option>
													<option>SEMARANG (SMG)</option>
												</select>
											</div>
											<div class="form-group row">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group row">
												<div class="col-xs-6">
													<div class="datepicker-wrap">
														<input type="text" class="input-text full-width" placeholder="Waktu" />
													</div>
												</div>
												<div class="col-xs-3">
													<div class="selector">
														<select class="full-width">
															<option value="">Dewasa</option>
															<option value="1">01</option>
														</select>
													</div>
												</div>
												<div class="col-xs-3">
													<div class="selector">
														<select class="full-width">
															<option value="">Anak</option>
															<option value="1">01</option>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group row">
												<div class="col-xs-6 pull-right">
													<button class="full-width">CARI TIKET</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- TIKET PESAWAT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<?php $this->load->view('common/footer'); ?>
	</footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>