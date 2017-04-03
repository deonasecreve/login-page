<h1>New user</h1>
	
	<form method="post">
		<div>
			<input type="hidden" name="id" value="<?=$patients[0]['id']?>">
			<label for="name">Firstname:</label>
			<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">Prefix:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">Lastname:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">Username:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">Password:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label for="species">E-mail:</label>
  				<input type="text" id="name" name="name" value="">
		</div>
		<div>
			<label></label>
			<input type="submit" value="newuser">
		</div>
	</form>
	