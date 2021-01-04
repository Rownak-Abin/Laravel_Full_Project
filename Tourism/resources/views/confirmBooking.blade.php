<!DOCTYPE html>
<html>
<head>
	<title>Approve Booking</title>
</head>
<body>
	<div class="sidebar">
		<ul>
			<li><a href="/bookings">Cancel</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</div>
	<form method="post">
		<table>
			@foreach($user as $i)

				<tr>
					<td>Customer ID</td>
					<td><input type="text" name="title" value="{{ $i->id }}"></td>	
				</tr>
				<tr>
					<td>Customer Name</td>
					<td><input type="text" name="place" value="{{ $i->Cname }}"></td>	
				</tr>
				
				<tr>
					<td>Package Name</td>
					<td><input type="text" name="description" value="{{ $i->tour }}"></td>	
				</tr>
				<tr>
					<td><a href="/confirmBooking/{{ $i->id }}">Approve</a></td>
				</tr>			
			@endforeach

		</table>
	</form>

</body>
</html>