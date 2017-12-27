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
			<form class="ui fluid form">
				<div class="field">
					<label>Nama Lengkap</label>
					<input placeholder="Nama Lengkap" type="text">
				</div>
				<div class="field">
					<label>Email</label>
					<input placeholder="Email" type="text">
				</div>
				<div class="field">
					<label>Subjek</label>
					<input placeholder="Subjek" type="text">
				</div>
				<div class="field">
					<label>Pesan</label>
    				<textarea rows="2"></textarea>
				</div>
				 <div class="ui submit green button" tabindex="0">Submit</div>
			</form>
		</div>
		<div class="three wide column">
			<?php echo $this->template->widget("secondmenu", array('title' => 'MFI')); ?>
		</div>
	</div>
</div>
