<?php
	require_once("header.inc.php");
?>	
	<br />
	<div class="container">
		<div class="columns">
			<div class="column is-one-third is-offset-one-third">
				<form name="frmAcceso" method="POST" action="checausr.php">
					<div class="field">
					  <p class="control has-icons-left has-icons-right">
					    <input class="input" type="email" placeholder="Email" name="correo" id="correo">
					    <span class="icon is-small is-left">
					      <i class="fas fa-envelope"></i>
					    </span>
					    <span class="icon is-small is-right">
					      <i class="fas fa-check"></i>
					    </span>
					  </p>
					</div>
					<div class="field">
					  <p class="control has-icons-left">
					    <input class="input" type="password" placeholder="Password" name="passw" id="passw">
					    <span class="icon is-small is-left">
					      <i class="fas fa-lock"></i>
					    </span>
					  </p>
					</div>
					<div class="field">
					  <p class="control">
					    <button class="button is-success">
					      <i class="fas fa-paper-plane"></i> &nbsp;Enviar
					    </button>
					  </p>
					</div>
				</form>
			</div>
		</div>
	</div>
	<br />
<?php
	require_once("footer.inc.php");
?>