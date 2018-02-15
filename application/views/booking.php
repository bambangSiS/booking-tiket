<!DOCTYPE html>
<html>
<head>
    <!-- Page Title -->
    <title>Travelo | Responsive HTML5 Travel Template</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/animate.min.css">
    
    <!-- Current Page Styles -->
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/revolution_slider/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?=base_url() ?>gudang/components/flexslider/flexslider.css" media="screen" />
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="<?=base_url() ?>gudang/css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="<?=base_url() ?>gudang/css/responsive.css">
</head>
<body>

    <div id="page-wrapper">
        <?php $this->load->view('common/header'); ?>
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Tiket Booking</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Tiket Booking</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                        <div class="booking-section travelo-box">

                            <form action="<=base_url() ?>pesawat/add_booking" class="booking-form">
                                <div class="person-information">
                                    <h2>Informasi Kontak</h2>
                                    <?php
                                    $sesiku = $user;

                                    if ($sesiku = $sesiku) {
                                        
                                    } else {
                                        echo "Login atau register";
                                    }
                                    ?>
                                    <?php foreach ($user as $key) {?>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="input-text full-width" value="<?=$key->nama ?>" placeholder="" disabled/>
                                        </div>
                                        <div class="col-sm-12">
                                            <label>Email</label>
                                            <input type="email" class="input-text full-width" value="<?=$key->email ?>" placeholder="" disabled/>
                                        </div>
                                        <div class="col-sm-12">
                                            <label>Nomor Telepon</label>
                                            <input type="text" class="input-text full-width" value="<?=$key->telepon ?>" placeholder="" disabled/>
                                        </div>
                                        <div class="col-sm-12">
                                            <label>Jenis Kelamin</label>
                                            <div class="selector">
                                                <select class="full-width" disabled>
                                                    <option value="Laki-Laki" <?php echo($key->jenkel=='L'?"selected":"") ?>>Laki-Laki</option>
                                                    <option value="Perempuan" <?php echo($key->jenkel=='P'?"selected":"") ?>>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <hr />
                                <div class="card-information">
                                    <?php for($x=1;$x<=$seat_qty;$x++) {?>
                                    <h2>Data Penumpang <?=$x ?></h2>
                                    <div class="form-group row">
                                        <div class="col-sm-5">
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="name_<?=$x?>" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                        <div class="col-sm-5">
                                            <label>Nomor Identitas</label>
                                            <input type="text" name="noid_<?=$x?>" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                        <div class="col-sm-2">
                                           <label>Pilih Kursi</label>
                                           <div class="input-group">
                                            <input id="kursi" data-toggle="modal" data-id="kursi<?= $x?>" data-target="#modalkursi" name="name" type="text" class="input-text full-width" required="">
                                        </div>
                                    </div>
                                </div>
                                <?php }?>

                                <!-- Modal -->
                                <div id="modalkursi" class="modal fade" role="dialog">
                                  <div class="modal-dialog"  style="width: 400px;">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Pilih Kursi</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-md-3">
                                            <?php for($x=1;$x<=20;$x++) {?>
                                            <label class="radio">
                                                <input type="radio" name="optradio" class="B<?=$x; $x+1?>">B<?=$x; $x+1?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3">
                                            <?php for($x=21;$x<=40;$x++) {?>
                                            <label class="radio">
                                                <input id="B<?=$x; $x+1?>" type="radio" name="optradio" class="success">B<?=$x; $x+1?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3">
                                            <?php for($x=41;$x<=60;$x++) {?>
                                            <label class="radio">
                                                <input id="B<?=$x; $x+1?>" type="radio" name="optradio" class="success">B<?=$x; $x+1?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-3">
                                            <?php for($x=61;$x<=80;$x++) {?>
                                            <label class="radio">
                                                <input id="B<?=$x; $x+1?>" type="radio" name="optradio" class="success">B<?=$x; $x+1?>
                                            </label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                            </div>
                            <hr />
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> By continuing, you agree to the <a href="#"><span class="skin-color">Terms and Conditions</span></a>.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <button type="submit" class="full-width btn-large">CONFIRM BOOKING</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                    <div class="booking-details travelo-box">
                        <h4>Booking Details</h4>
                        <?php foreach ($rute as $data) {?>
                        <article class="flight-booking-details">
                            <figure class="clearfix">
                                <a title="" href="" class="middle-block"><img class="middle-item" alt="" src="<?=base_url(); ?>gudang/images/logo/<?=$data->img ?>"></a>
                                <div class="travel-title">
                                    <h5 class="box-title"><?php echo $data->bandarafrom; ?>(<?php echo $data->isofrom; ?>) - <?php echo $data->bandarato; ?> (<?php echo $data->isoto; ?>)<small><?php echo $data->maskapai; ?></small></h5>
                                    <a href="flight-detailed.html" class="button">EDIT</a>
                                </div>
                            </figure>
                            <div class="details">
                                <div class="constant-column-3 timing clearfix">
                                    <div class="check-in">
                                        <label>Pergi</label>
                                        <span><?php echo date_format(date_create($data->depart_at), 'd M Y');  ?><br /><?php echo date_format(date_create($data->depart_at), 'H:i');  ?></span>
                                    </div>
                                    <?php 
                                    $date1 = new DateTime($data->depart_at);
                                    $date2 = new DateTime($data->arrival);
                                    $diff = $date1->diff($date2);
                                    ?>
                                    <div class="duration text-center">
                                        <i class="soap-icon-clock"></i>
                                        <span><?php echo $diff->h.' J '.$diff->i.' menit ' ?></span>
                                    </div>
                                    <div class="check-out">
                                        <label>Tiba</label>
                                        <span><?php echo date_format(date_create($data->arrival), 'd M Y');  ?><br /><?php echo date_format(date_create($data->arrival), 'H:i');  ?></span>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php } ?>

                        <h4>Other Details</h4>
                        <dl class="other-details">
                            <dt class="feature">Maskapai :</dt><dd class="value"><?php echo $data->maskapai; ?></dd>
                            <dt class="feature">Harga :</dt><dd class="value"><?php echo $data->price; ?></dd>
                            <dt class="feature">PPN :</dt><dd class="value">sudah termasuk</dd>
                            <dt class="total-price">Total Price</dt><dd class="total-price-value"><?php echo $data->price; ?></dd>
                        </dl>
                    </div>

                    <div class="travelo-box contact-box">
                        <h4>Need Travelo Help?</h4>
                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                        <address class="contact-details">
                            <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                            <br>
                            <a class="contact-email" href="#">help@travelo.com</a>
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <?php $this->load->view('common/footer'); ?>
    </footer>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.noconflict.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/modernizr.2.7.1.min.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery-ui.1.10.4.min.js"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="<?=base_url() ?>gudang/js/bootstrap.js"></script>

<!-- load revolution slider scripts -->
<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- load BXSlider scripts -->
<script type="text/javascript" src="<?=base_url() ?>gudang/components/jquery.bxslider/jquery.bxslider.min.js"></script>

<!-- load FlexSlider scripts -->
<script type="text/javascript" src="<?=base_url() ?>gudang/components/flexslider/jquery.flexslider-min.js"></script>

<!-- Google Map Api -->
<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

<script type="text/javascript" src="<?=base_url() ?>gudang/js/calendar.js"></script>

<!-- parallax -->
<script type="text/javascript" src="<?=base_url() ?>gudang/js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="<?=base_url() ?>gudang/js/waypoints.min.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="<?=base_url() ?>gudang/js/theme-scripts.js"></script>
<script type="text/javascript" src="<?=base_url() ?>gudang/js/scripts.js"></script>

<script type="text/javascript">
    
    var radio = $('.modalkursi').find('input:radio[checked]');

    $('').val(radio.attr('id'))
</script>
</body>
</html>