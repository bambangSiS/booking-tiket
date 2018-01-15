<header id="header" class="navbar-static-top">
    <div class="topnav hidden-xs">
        <div class="container">
            <ul class="quick-menu pull-left">
                <li><a href="<?php echo base_url(); ?>akun">AKUN SAYA</a></li>
                <li class="ribbon">
                    <a href="#">Bahasa</a>
                    <ul class="menu mini">
                        <li class="active"><a href="#" title="Indonesia">Indonesia</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="quick-menu pull-right">
                <li><a href="#travelo-login" class="soap-popupbox">MASUK</a></li>
                <li><a href="#travelo-signup" class="soap-popupbox">DAFTAR</a></li>
                <li class="ribbon currency">
                    <a href="#" title="">Mata Uang</a>
                    <ul class="menu mini">
                        <li class="active"><a href="#" title="IDR">Rupiah</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-header">
        <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
            Mobile Menu Toggle
        </a>
        <div class="container">
            <h1 class="navbar-brand">
                <a href="<?php echo base_url() ?>">
                    <img src="<?php echo base_url(); ?>gudang/images/logo.png" alt="Travelo HTML5 Template" />
                </a>
            </h1>
            <nav id="main-menu" role="navigation">
                <ul class="menu">
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>tiket">Tiket Pesawat</a>
                    </li>
                    <!-- <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>tiket">Tiket Kereta</a>
                    </li> -->
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>page/pembelian">Cara Pembelian</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>page/about">Tentang Kami</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>page/kontak">Hubungi Kami</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo base_url(); ?>admin">Admin</a>
                    </li>
                </ul>
            </nav>
        </div>

        <nav id="mobile-menu-01" class="mobile-menu collapse">
            <ul id="mobile-primary-menu" class="menu">
                <li class="menu-item-has-children">
                    <a href="index.html">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="hotel-index.html">Hotels</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="flight-index.html">Flights</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="car-index.html">Cars</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="cruise-index.html">Cruises</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Shortcodes</a>
                </li>
            </ul>

            <ul class="mobile-topnav container">
                <li><a href="<?php echo base_url(); ?>akun">MY ACCOUNT</a></li>
                <li class="ribbon language menu-color-skin">
                    <a href="#" data-toggle="collapse">ENGLISH</a>
                    <ul class="menu mini">
                        <li><a href="#" title="Dansk">Dansk</a></li>
                        <li><a href="#" title="Deutsch">Deutsch</a></li>
                        <li class="active"><a href="#" title="English">English</a></li>
                    </ul>
                </li>
                <li><a href="#travelo-login" class="soap-popupbox">MASUK</a></li>
                <li><a href="#travelo-signup" class="soap-popupbox">DAFTAR</a></li>
                <li class="ribbon currency menu-color-skin">
                    <a href="#">USD</a>
                    <ul class="menu mini">
                        <li><a href="#" title="AUD">AUD</a></li>
                        <li><a href="#" title="BRL">BRL</a></li>
                        <li class="active"><a href="#" title="USD">USD</a></li>
                    </ul>
                </li>
            </ul>

        </nav>
    </div>
    <div id="travelo-signup" class="travelo-signup-box travelo-box">
        <div class="seperator"><label>DAFTAR</label></div>
        <form>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Nama Depan">
            </div>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Nama Belakang">
            </div>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Alamat Email">
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Konfirmasi Password">
            </div>
            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Berlangganan email
                    </label>
                </div>
            </div>
            <div class="form-group">
                <p class="description">Mendaftar berarti mematuhi semua peraturan.</p>
            </div>
            <button type="submit" class="full-width btn-medium">DAFTAR</button>
        </form>
        <div class="seperator"></div>
        <p>Sudah mempunyai akun? <a href="#travelo-login" class="goto-signup soap-popupbox">Masuk</a></p>
    </div>
    <div id="travelo-login" class="travelo-login-box travelo-box">
        <div class="seperator"><label>MASUK</label></div>
        <form>
            <div class="form-group">
                <input type="text" class="input-text full-width" placeholder="Alamat Email">
            </div>
            <div class="form-group">
                <input type="password" class="input-text full-width" placeholder="Password">
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password pull-right">Lupa Password?</a>
                <div class="checkbox checkbox-inline">
                    <label>
                        <input type="checkbox"> Ingat saya
                    </label>
                </div>
                <button type="submit" class="full-width btn-medium">MASUK</button>
            </div>
        </form>
        <div class="seperator"></div>
        <p>Belum mempunyai akun? <a href="#travelo-signup" class="goto-signup soap-popupbox">Daftar</a></p>
    </div>
</header>