<div class="ui blue fixed inverted menu">
	<div class="ui container">
		<a href="<?php echo site_url(); ?>" class="header">
			<img class="logo" src="<?php echo base_url('assets/images/logo.png'); ?>">
		</a>
		<div class="right menu">
			<?php if ($this->session->userdata('login') <> TRUE) : ?>
				<a href="<?php echo site_url(); ?>" class="item"><strong>Home</strong></a>
				<div class="ui simple dropdown item">
					<strong>Profil</strong>
					<i class="dropdown icon"></i>
					<div class="menu">
						<a class="item" href="<?php echo site_url('profil/mfi'); ?>"><strong>Mandiri Finance Indonesia</strong></a>
		          		<a class="item" href="<?php echo site_url('profil/vm'); ?>"><strong>Visi & Misi</strong></a>
		          		<a class="item" href="<?php echo site_url('profil/pengurus'); ?>"><strong>Pengurus</strong></a>
		          		<a class="item" href="<?php echo site_url('profil/kantor'); ?>"><strong>Kantor Pusat & Cabang</strong></a>
					</div>
				</div>
				<a href="<?php echo site_url('layanan'); ?>" class="item"><strong>Layanan</strong></a>
				<a href="<?php echo site_url('mitra'); ?>" class="item"><strong>Mitra</strong></a>
				<a href="<?php echo site_url('hubungi'); ?>" class="item"><strong>Hubungi kami</strong></a>
				<div class="ui simple dropdown item">
					<strong>Konsumen</strong>
					<i class="dropdown icon"></i>
					<div class="menu">
						<a class="item" href="<?php echo site_url('login'); ?>"><strong>Masuk</strong></a>
						<a class="item" href="<?php echo site_url('daftar'); ?>"><strong>Daftar</strong></a>
					</div>
				</div>
			<?php else : ?>
				<a href="<?php echo site_url('dashboard'); ?>" class="item"><strong>Dashboard</strong></a>
				<div class="ui simple dropdown item">
					<strong>Akun</strong>
					<i class="dropdown icon"></i>
					<div class="menu">
						<a class="item" href="<?php echo site_url('akun'); ?>"><strong>Profil</strong></a>
						<a class="item" href="<?php echo site_url('login/logout'); ?>"><strong>Logout</strong></a>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>