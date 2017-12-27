<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<div class="ui breadcrumb">
		<a href="<?php echo base_url(); ?>" class="section">Beranda</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Visi & Misi</div>
	</div>
	<h2>Visi & Misi</h2>
	<div class="ui grid">
		<div class="thirteen wide column">
			<h3>Visi</h3>
			<p>Menjadi perusahaan pembiayaan otomotif terpercaya dan terkemuka di Indonesia yang berorientasi pada pelayanan dan pencapaian tingkat kepuasan konsumen tertinggi.</p>
			<h3>Misi</h3>
			<p>Dapat diandalkan oleh konsumen korporasi maupun individual dalam memenuhi kebutuhan pembiayaan, khususnya produk-produk otomotif baik melalui Pembiayaan Konsumen ataupun Sewa Guna Usaha.<br>Kecepatan, Kemudahan, dan Kepuasan konsumen merupakan rangkaian nilai yang akan selalu kami tunjukkan untuk membuat produk dan layanan Mandiri Finance bisa “MELAYANI LEBIH BAIK”.	</p>
		</div>
		<div class="three wide column">
			<?php echo $this->template->widget("secondmenu", array('title' => 'MFI')); ?>
		</div>
	</div>
</div>