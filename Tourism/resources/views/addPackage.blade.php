<!DOCTYPE html>
<html>
<head>
	<title>Add New Package</title>
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
	<form method="POST" enctype="multipart/form-data">	
		<table border="1">
				
				<tr>
					<td>titlepic</td>
					<td colspan="1"><input type="file" name="titlepic"></td>
				</tr>c
				<tr>
					<td>mainpic</td>
					<td colspan="1"><input type="file" name="mainpic"></td>
				</tr>
				<tr>
					<td>Package Title</td>
					<td><input type="text" name="tname"></td>
				</tr>
				<tr>
					<td>Place</td>	
					<td><input type="text" name="place"></td>
				</tr>
				
				<tr>
					<td>Description</td>
					<td><input type="text" name="description"></td>
				</tr>
				<tr>
					<td>transport</td>
					<td><input type="text" name="transport"></td>
				</tr>
				<tr>
					<td>departure</td>
					<td><input type="text" name="departure"></td>
				</tr>
				<tr>
					<td>seller</td>
					<td><input type="text" name="seller"></td>
				</tr>
				
				<tr>
					<td>Days</td>
					<td><input type="text" name="duration"></td>
				</tr>
				<tr>
					<td>Cost (Per person)</td>
					<td><input type="text" name="tprice"></td>
				</tr>
				<tr>
					<td>map</td>
					<td colspan="1"><input type="file" name="map"></td>
				</tr>
				<tr>
					<td>rating</td>
					<td><input type="text" name="rating"></td>
				</tr>
			
		</table>
	</div>
	<input type="submit" name="btn" value="Add Package">
	</form>

</body>
</html>