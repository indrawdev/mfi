<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $this->template->title->default("Default title"); ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $this->template->description; ?>">
    <meta name="author" content="Indra Pramana">
    <?php echo $this->template->meta; ?>
    <link rel="stylesheet" href="<?php echo base_url('assets/semantic/semantic.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <?php echo $this->template->stylesheet; ?>
</head>
<body>

<?php 
    echo $this->template->widget("navigation", array('title' => 'MFI'));
?>

<?php
    echo $this->template->content;
?>

<!-- FOOTER -->
<div class="ui inverted vertical footer segment">
    <div class="ui center aligned container">
        <div class="ui stackable inverted divided grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Mandiri Finance Indonesia</h4>
                <div class="ui inverted link list">
                    <a href="<?php echo site_url('profil/mfi'); ?>" class="item">Profil</a>
                    <a href="<?php echo site_url('profil/vm'); ?>" class="item">Visi & Misi</a>
                    <a href="<?php echo site_url('profil/pengurus'); ?>" class="item">Pengurus</a>
                    <a href="<?php echo site_url('profil/kantor'); ?>" class="item">Kantor Pusat & Cabang</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">AMG Group</h4>
                <div class="ui inverted link list">
                    <a href="<?php echo site_url('layanan'); ?>" class="item">Layanan</a>
                    <a href="<?php echo site_url('mitra'); ?>" class="item">Mitra</a>
                    <a href="<?php echo site_url('karir'); ?>" class="item">Karir</a>
                    <a href="<?php echo site_url('hubungi'); ?>" class="item">Hubungi Kami</a>
                </div>
            </div>
            <div class="five wide column">
                <h4 class="ui inverted header">Dibawah Pengawasan</h4>
                <img src="<?php echo base_url('assets/images/appi.png'); ?>">
                <img src="<?php echo base_url('assets/images/ojk.png'); ?>">
                <br>
                <img src="<?php echo base_url('assets/images/inklusi-keuangan.png'); ?>">
            </div>
            <div class="five wide column">
                <h4 class="ui inverted header">PT. Mandiri Finance Indonesia</h4>
                <p>WISMA AMG <br>Jl. R.S Fatmawati No. 29<br>Jakarta Selatan, Jakarta 12430<br>
                <i class="text telephone icon"></i> (021) 750 9165<br>
                <i class="fax icon"></i> (021) 750 9163<br>
                <i class="mail icon"></i> info@mandirifinance.com</p>
            </div>
        </div>
        <div class="ui inverted section divider"></div>
        <img src="<?php echo base_url('assets/images/mfi.png'); ?>" class="ui centered small image">
        <div class="ui horizontal inverted small divided link list">
            <a class="item" href="#">Site Map</a>
            <a class="item" href="<?php echo site_url('hubungi'); ?>">Hubungi Kami</a>
            <a class="item" href="#">Terms and Conditions</a>
            <a class="item" href="#">Privacy Policy</a>
        </div>
        <p>Copyright © Mandiri Finance Indonesia Terdaftar dan diawasi oleh OTORITAS JASA KEUANGAN <img src="<?php echo base_url('assets/images/small-ojk.png'); ?>"></p>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/semantic/semantic.min.js'); ?>"></script>
<?php echo $this->template->javascript; ?>

</body>
</html>