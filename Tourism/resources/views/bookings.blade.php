<!DOCTYPE html>
<html>
<head>
	<title>Customer bookings</title>
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
				<td>Customer ID</td>
				<td>Customer Name</td>
				<td>Package Name</td>
				<td>Status</td>
				<td></td>
				<td></td>
			</tr>
			@foreach($bookings as $i)
			<tr>
				<td>{{ $i->id }}</td>
				<td>{{ $i->Cname }}</td>
				<td>{{ $i->tour }}</td>
				<td>{{ $i->status }}</td>

				<td><a href="/approveBooking/{{ $i->id }}">Approve</a></td>
				<td><a href="/removeBooking/{{ $i->id }}">Decline</a></td>
			</tr>
			@endforeach
		</table>
	</div>
</body>
</html>