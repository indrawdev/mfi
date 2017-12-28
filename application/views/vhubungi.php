<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<div class="ui breadcrumb">
		<a href="<?php echo base_url(); ?>" class="section">Beranda</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Hubungi</div>
	</div>
	<h2>Hubungi</h2>
	<div class="ui grid">
		<div class="thirteen wide column">
			<div id="response"></div><br>
			<form id="contact" class="ui fluid form" method="POST">
				<div class="field">
					<label>Nama Lengkap</label>
					<input type="text" name="fs_nama_lengkap" placeholder="Nama Lengkap">
				</div>
				<div class="field">
					<label>Email</label>
					<input type="text" name="fs_email" placeholder="Email">
				</div>
				<div class="field">
					<label>Subjek</label>
					<input type="text" name="fs_subjek" placeholder="Subjek">
				</div>
				<div class="field">
					<label>Pesan</label>
    				<textarea name="fs_pesan" rows="2"></textarea>
				</div>
				<button class="ui submit green button" tabindex="0">Kirim</button>
			</form>
		</div>
		<div class="three wide column">
			<?php echo $this->template->widget("secondmenu", array('title' => 'MFI')); ?>
		</div>
	</div>
</div>
