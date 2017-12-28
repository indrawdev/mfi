<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<h2>Kartu Piutang</h2>
	<div class="ui grid">
		<div class="eight wide column">
			<div class="ui form">
				<div class="field">
					<label>Dealer</label>
					<input readonly="" type="text" value="PT. MANDIRI FINANCE INDONESIA (91-13)">
				</div>
				<div class="three fields">
					<div class="field">
						<label>Nomor PJJ</label>
						<input readonly="" type="text" value="12003">
					</div>
					<div class="field">
						<label>JP</label>
						<input readonly="" type="text" value="C">
					</div>
					<div class="field">
						<label>PT</label>
						<input readonly="" type="text" value="91">
					</div>
				</div>
				<div class="field">
					<label>Nama</label>
					<input readonly="" type="text" value="PURNABUANA YUDHA, PT">
				</div>
				<div class="field">
					<label>Alamat</label>
					<textarea rows="2">WISMA MITRA SUNTER LT. /045. JL YOS SUDARSO KAV.89 BOULEVAR, JAKARTA UTARA</textarea>
				</div>
				<div class="two fields">
					<div class="field">
						<label>Lama Angsuran</label>
						<input readonly="" type="text" value="36">
					</div>
					<div class="field">
						<label>Angsuran/Bln</label>
						<input readonly="" type="text" value="16.813.000">
					</div>
				</div>
				<div class="two fields">
					<div class="field">
						<label>Tanggal Cair</label>
						<input readonly="" type="text" value="26/07/2012">
					</div>
					<div class="field">
						<label>Tanggal Angs</label>
						<input readonly="" type="text" value="26 ( ADV )">
					</div>
				</div>
			</div>
		</div>
		<div class="eight wide column">
			<div class="ui form">
				<div class="three fields">
					<div class="field">
						<label>Jenis Kendaraan</label>
						<input readonly="" type="text" value="MIFUSO">
					</div>
					<div class="field">
						<label>No. Rangka</label>
						<input readonly="" type="text" value="FU415N-560015">
					</div>
					<div class="field">
						<label>No. Mesin</label>
						<input readonly="" type="text" value="8DC9-504469">
					</div>
				</div>
			</div>
			<table class="ui definition table">
				<tbody>
					<tr>
						<td>Harga OTR</td>
						<td>600.000</td>
					</tr>
					<tr>
						<td>Premi</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Uang Muka</td>
						<td>150.000.000</td>
					</tr>
					<tr>
						<td>Jumlah Pembiayaan</td>
						<td>450.000.000</td>
					</tr>
					<tr>
						<td>Bunga</td>
						<td>155.268.000</td>
					</tr>
					<tr>
						<td>Jumlah Piutang</td>
						<td>605.268.000</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="ui grid">
		<div class="sixteen wide column">
			<table class="ui compact celled definition table">
				<thead class="full-width">
					<tr>
						<th>NO</th>
						<th>TGL KIRIM</th>
						<th>TGL BANK</th>
						<th>TGL JTP</th>
						<th>URAIAN</th>
						<th>MUTASI</th>
						<th>SALDO</th>
						<th>DENDA</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>26/07/2012</td>
						<td>26/07/2012</td>
						<td>26/07/2012</td>
						<td>PEMBAYARAN ANGSURAN KE- 1</td>
						<td>16.813.000</td>
						<td>16.813.000</td>
						<td>0</td>
					</tr>
					<tr>
						<td>2</td>
						<td>27/07/2012</td>
						<td>27/07/2012</td>
						<td>27/07/2012</td>
						<td>SALDO PIUTANG AWAL</td>
						<td>605.268.000</td>
						<td>588.455.000</td>
						<td>0</td>
					</tr>
					<tr>
						<td>3</td>
						<td>29/08/2012</td>
						<td>29/08/2012</td>
						<td>29/08/2012</td>
						<td>PEMBAYARAN ANGSURAN KE- 2</td>
						<td>16.813.000</td>
						<td>554.829.000</td>
						<td>0</td>
					</tr>
					<tr>
						<td>4</td>
						<td>27/09/2012</td>
						<td>27/09/2012</td>
						<td>27/09/2012</td>
						<td>PEMBAYARAN ANGSURAN KE- 3</td>
						<td>16.813.000</td>
						<td>571.642.000</td>
						<td>0</td>
					</tr>
				</tbody>
				<tfoot class="full-width">
					<tr>
						<th></th>
						<th colspan="4">T O T A L</th>
						<th>0</th>
						<th>0</th>
						<th>0</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>