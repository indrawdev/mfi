<div class="ui red fixed inverted menu">
	<div class="ui container">
		<a href="<?php echo site_url(); ?>" class="header">
			<img class="logo" src="<?php echo base_url('assets/images/logo.png'); ?>">
		</a>
		<div class="right menu">
			<a href="<?php echo site_url('controlpanel'); ?>" class="item"><strong>Control Panel</strong></a>
			<div class="ui simple dropdown item">
				<strong>Akun</strong>
				<i class="dropdown icon"></i>
				<div class="menu">
					<a class="item" href="<?php echo site_url('admin/logout'); ?>"><strong>Logout</strong></a>
				</div>
			</div>
		</div>
	</div>
</div>