<!DOCTYPE html>
<html>
<head>
	<title>Package Details</title>
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
	<h1>Package Details</h1>
	<br>
	<!-- <form method="POST">	 -->
		<table border="1">
				
			@forEach($details as $i)
				<tr>
					<td>titlepic</td>
					<td>{{ $i->titlepic }}</td>	
				</tr>c
				<tr>
					<td>mainpic</td>
					<td>{{ $i->mainpic }}</td>	
				</tr>
				<tr>
					<td>Package ID</td>
					<td>{{ $i->id }}</td>	
				</tr>
				<tr>
					<td>Package Title</td>
					<td>{{ $i->tname }}</td>	
				</tr>
				<tr>
					<td>Place</td>
					<td>{{ $i->place }}</td>	
				</tr>
				
				<tr>
					<td>Description</td>
					<td>{{ $i->description }}</td>	
				</tr>
				<tr>
					<td>transport</td>
					<td>{{ $i->transport }}</td>	
				</tr>
				<tr>
					<td>departure</td>
					<td>{{ $i->departure }}</td>	
				</tr>
				<tr>
					<td>seller</td>
					<td>{{ $i->seller }}</td>	
				</tr>
				
				<tr>
					<td>Days</td>
					<td>{{ $i->duration }}</td>	
				</tr>
				<tr>
					<td>Cost (Per person)</td>
					<td>{{ $i->tprice }}</td>	
				</tr>
				<tr>
					<td>map</td>
					<td>{{ $i->map }}</td>	
				</tr>
				<tr>
					<td>rating</td>
					<td>{{ $i->rating }}</td>	
				</tr>
				<tr>
					<a href="/deletePackage/{{ $i->id }}">Delete package</a><br>
				</tr>
				<tr>
					<a href="/modifyPackage/{{ $i->id }}">Modify package</a>
				</tr>

		@endforeach
			
		</table>
	</div>
	<!-- </form> -->

</body>
</html>