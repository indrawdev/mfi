<div class="ui red fixed inverted menu">
	<div class="ui container">
		<a href="<?php echo site_url(); ?>" class="header">
			<img class="logo" src="<?php echo base_url('assets/images/logo.png'); ?>">
		</a>
		<div class="right menu">
			<a href="<?php echo site_url(); ?>" class="item"><strong>Home</strong></a>
			<div class="ui simple dropdown item">
				<strong>Profil</strong>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="<?php echo site_url('profil/mfi'); ?>"><strong>MFI</strong></a>
	          		<a class="item" href="<?php echo site_url('profil/vm'); ?>"><strong>Visi & Misi</strong></a>
	          		<a class="item" href="<?php echo site_url('profil/pengurus'); ?>"><strong>Pengurus</strong></a>
	          		<a class="item" href="<?php echo site_url('profil/kantor'); ?>"><strong>Kantor Pusat & Cabang</strong></a>
				</div>
			</div>
			<a href="<?php echo site_url('layanan'); ?>" class="item"><strong>Layanan</strong></a>
			<a href="<?php echo site_url('mitra'); ?>" class="item"><strong>Mitra</strong></a>
			<a href="<?php echo site_url('hubungi'); ?>" class="item"><strong>Hubungi kami</strong></a>
		</div>
	</div>
</div>