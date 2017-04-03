<h1>Login</h1>
	
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patients[0]['id']?>">
			<label for="name">Username:</label>
			<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">Password:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label></label>
			<input type="submit" value="login">
		</div>
	</form>
	
