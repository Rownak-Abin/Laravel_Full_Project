<!DOCTYPE html>
<html>
<head>
	<title>Delete Package</title>
</head>
<body>
	<div class="sidebar">
		<ul>
			<li><a href="/packages">Cancel</a></li>
			<li><a href="/logout">Logout</a></li>
		</ul>
	</div>
	<form method="post">
		<table>
			@foreach($packages as $i)

				<tr>
					<td>Package Title</td>
					<td><input type="text" name="title" value="{{ $i->tname }}"></td>	
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
					<td><a href="/destroyPackage/{{ $i->id }}">Delete</a></td>
				</tr>			
			@endforeach

		</table>
	</form>

</body>
</html>