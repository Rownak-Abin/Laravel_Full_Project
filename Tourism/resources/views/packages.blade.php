<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
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
			<tr>
				<td>Package ID</td>
				<td>Title</td>
				<td>Description</td>
				<td>Place</td>
				<td></td>
			</tr>
			@foreach($packages as $i)
				<tr>
					<td>{{ $i->id }}</td>
					<td>{{ $i->tname }}</td>
					<td>{{ $i->description }}</td>
					<td>{{ $i->place }}</td>
					<td>
						<a href="/packageDetails/{{ $i->id }}">See details..</a> 
					</td>
				</tr>
			@endforeach
			
		</table>
		<a href="/addPackage">Add New Package</a>
	</div>

</body>
</html>