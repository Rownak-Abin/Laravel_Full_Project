<!DOCTYPE html>
<html>
<head>
	<title>Modify Package</title>
</head>
<body>
	<div class="sidebar">
		<ul>
			<li><a href="/packages">Cancel</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</div>
	<div>
	<h1>Package Details</h1>
	<form method="POST" enctype="multipart/form-data">	
		<table border="1">
			@forEach( $package as $i)	
				<tr>
					<td>titlepic</td>
					<td colspan="1"><input type="file" name="titlepic" value="{{ $i->titlepic }}"></td>
				</tr>c
				<tr>
					<td>mainpic</td>
					<td colspan="1"><input type="file" name="mainpic" value="{{ $i->mainpic }}"></td>
				</tr>
				<tr>
					<td>Package Title</td>
					<td><input type="text" name="tname" value="{{ $i->tname }}"></td>
				</tr>
				<tr>
					<td>Place</td>	
					<td><input type="text" name="place" value="{{ $i->place }}"></td>
				</tr>
				
				<tr>
					<td>Description</td>
					<td><input type="text" name="description" value="{{ $i->description }}"></td>
				</tr>
				<tr>
					<td>transport</td>
					<td><input type="text" name="transport" value="{{ $i->transport }}"></td>
				</tr>
				<tr>
					<td>departure</td>
					<td><input type="text" name="departure" value="{{ $i->departure }}"></td>
				</tr>
				<tr>
					<td>seller</td>
					<td><input type="text" name="seller" value="{{ $i->seller }}"></td>
				</tr>
				
				<tr>
					<td>Days</td>
					<td><input type="text" name="duration" value="{{ $i->duration }}"></td>
				</tr>
				<tr>
					<td>Cost (Per person)</td>
					<td><input type="text" name="tprice" value="{{ $i->tprice }}"></td>
				</tr>
				<tr>
					<td>map</td>
					<td colspan="1"><input type="file" name="map" value="{{ $i->map }}"></td>
				</tr>
				<tr>
					<td>rating</td>
					<td><input type="text" name="rating" value="{{ $i->rating }}"></td>
				</tr>
			@endforeach
		</table>
	</div>
	<input type="submit" name="btn" value="Update">
	</form>

</body>
</html>