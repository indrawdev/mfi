<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<div class="ui middle aligned center aligned grid">
		<div class="column">
			<h2 class="ui teal image header">
				<div class="content">DAFTAR | KONSUMEN</div>
			</h2>
			<div id="response"></div><br>
			<form id="daftar" class="ui form" method="POST">
				<div class="ui stacked segment">
					<div class="field">
						<div class="ui left icon input">
							<i class="user icon"></i>
							<input type="text" name="fs_email" placeholder="E-mail address">
						</div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock icon"></i>
							<input type="password" name="fs_password" placeholder="Password">
						</div>
					</div>
					<button class="ui fluid positive teal submit button">Daftar</button>
				</div>
			</form>
		</div>
	</div>
</div>