<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>
<div class="sidebar">
		<ul>
			<li><a href="/profile">Home</a></li>
			<li><a href="/packages">Packages</a></li>
			<li><a href="/bookings">Bookings</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
</div>
<div>
	<form method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Edit Profile</legend>
			<table>
				@forEach( $user as $i)
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{ $i->username }}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ $i->password }}"></td>
				</tr>
				<tr>
					<td>Agency Name</td>
					<td><input type="text" name="agencyname" value="{{ $i->agencyname }}"></td>
				</tr>
				<tr>
					<td>Agency Descrition</td>
					<td><input type="text" name="agencydesc" value="{{ $i->agencydesc }}"></td>
				</tr>
				<tr>
					<td>License No.</td>
					<td><input type="text" name="licenseno" value="{{ $i->licenseno }}"></td>
				</tr>
				<tr>
					<td>Website</td>
					<td><input type="text" name="webadd" value="{{ $i->webadd }}"></td>
				</tr>
				<tr>
					<td>Contact No.</td>
					<td><input type="text" name="contact" value="{{ $i->contact }}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{ $i->email }}"></td>
				</tr>
				@endforeach
			</table>
			<input type="submit" name="submit" value="Save">
		</fieldset>
	</form>
</div>
</body>
</html>