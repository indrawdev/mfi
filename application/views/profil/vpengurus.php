<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<div class="ui breadcrumb">
		<a href="<?php echo base_url(); ?>" class="section">Beranda</a>
		<i class="right chevron icon divider"></i>
		<div class="active section">Pengurus</div>
	</div>
	<h2>Pengurus</h2>
	<div class="ui grid">
		<div class="thirteen wide column">
			<h3>Sekilas tentang Pemegang Saham</h3>
			<p>Pendiri dan pemegang saham perusahaan adalah kelompok usaha Auto Mandiri Group (AMG). Auto Mandiri Group terus berkembang dalam skala nasional dengan bisnis inti distribusi produk otomotif dan pembiayaan otomotif didirikan dan mewakili pengusaha-pengusaha yang telah melewati krisis ekonomi dan keuangan yang terjadi di Indonesia dengan reputasi bisnis yang solid, termasuk di bidang keuangan dan perbankan. Auto Mandiri Group dipimpin oleh Bapak Hosea Sanjaya sebagai Presiden Direktur dan Bapak Wiranata Halim sebagai Presiden Komisaris.</p>
			<p>PT. Karya Semesta Investama, berkedudukan di Jakarta, didirikan oleh Bapak Wiranata Halim dan Bapak Hosea Sanjaya berdasarkan Akte No. 17, Notaris Benny Kristianto SH. tanggal 15 Oktober 2003 merupakan Perusahaan Induk dari Auto Mandiri Group. Beberapa anak perusahaan dan perusahaan-perusahaan afiliasi dari Auto Mandiri Group:</p>
			<ul>
				<li>PT. Sarana Auto Mandiri, Dealer Kawasaki, Propinsi Kalimantan Selatan dan Kalimantan Tengah;</li>
				<li>PT. Makmur Auto Mandiri, Dealer Kawasaki, Propinsi Sulawesi Utara dan Gorontalo;</li>
				<li>PT. Bahana Auto Mandiri, Dealer Kawasaki, Propinsi Bangka Belitung;</li>
				<li>PT. Bahana Makmur Mandiri, Dealer Kawasaki Propinsi Jambi dan Sumatera Selatan;</li>
				<li>PT. Wira Megah Profitamas, Dealer Toyota, Kalimantan Selatan dan Kalimantan Tengah;</li>
				<li>PT. Mitra Megah Profitamas, Dealer Suzuki, Kalimantan Selatan dan Kalimantan Tengah;</li>
				<li>PT. Mitra Profitamas, Dealer Hino, Kalimantan Selatan dan Kalimantan Tengah;</li>
				<li>PT. Cakrawala Putra Bersama, Persewaan Alat-Alat Berat (khususnya pertambangan batu bara) di Kalimantan.</li>
			</ul>
			<h3>Pengurus - Dewan Komisaris & Direksi</h3>
			<table class="ui single line table">
				<thead>
					<tr>
						<th colspan="3">Dewan Komisaris</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Presiden Komisaris</td>
						<td>Wiranata Halim</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Komisaris</td>
						<td>Winarman Halim</td>
					</tr>
				</tbody>
			</table>
			<table class="ui single line table">
				<thead>
					<tr>
						<th colspan="3">Dewan Direksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Presiden Direktur</td>
						<td>Hosea Sanjaya</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Direktur</td>
						<td>William</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="three wide column">
			<?php echo $this->template->widget("secondmenu", array('title' => 'MFI')); ?>
		</div>
	</div>
</div>