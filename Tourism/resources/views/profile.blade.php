<!DOCTYPE html>
<html>
<head>
	<title>Profile page</title>
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
		<table border="1">
			@foreach ($user as $i)
				<tr>
					<td>ID</td>
					<td>{{ $i->id }}</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>{{ $i->name }}</td>
				</tr>
				
				<tr>
					<td colspan="2"><a href="/editProfile/ {{ $i->agencyid }}">Edit Profile</a></td>
				</tr>
			
				<!-- <td>Action</td> -->
			@endforeach
		</table>
	</div>
</body>
</html>