<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="ui main container">
	<div class="ui middle aligned center aligned grid">
		<div class="column" style="max-width: 450px;">
			<h2 class="ui teal image header">
				<div class="content">LOGIN | KONSUMEN</div>
			</h2>
			<div id="response"></div><br>
			<form id="login" class="ui form" method="POST">
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
					<button class="ui fluid positive teal submit button">Login</button>
				</div>
			</form>
			
		</div>
	</div>
</div>