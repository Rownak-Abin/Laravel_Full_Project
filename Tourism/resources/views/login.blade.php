<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Login</legend>
			<input type="text" name="username" placeholder="name"><br><br>
			<input type="password" name="password" placeholder="password"><br><br>
			<input type="submit" name="btn" value="submit">
		</fieldset>
	</form>
	@if(session('msg'))
		{{ session('msg') }}
	@endif
</body>
</html>