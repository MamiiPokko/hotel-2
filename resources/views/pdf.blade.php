<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title></title>
</head>
<body>
<style>
	@font-face {
		font-family: 'THSarabunNew';
		font-style: normal;
		font-weight: normal;
		src : url("{asset('font/THSarabunNew.ttf') }}") format('truetype');
	}

	@font-face {
		font-family: 'THSarabunNew';
		font-style: normal;
		font-weight: bold;
		src : url("{asset('font/THSarabunNew Bold.ttf') }}") format('truetype');
	}

	@font-face {
		font-family: 'THSarabunNew';
		font-style: italic;
		font-weight: normal;
		src : url("{asset('font/THSarabunNew Italic.ttf') }}") format('truetype');
	}

	@font-face {
		font-family: 'THSarabunNew';
		font-style: italic;
		font-weight: bold;
		src : url("{asset('font/THSarabunNew BoldItalic.ttf') }}") format('truetype');
	}

	body{
		font-family: "THSarabunNew";
	}
	
	table{
		border-collapse: collapse;
	}

	td,th{
		border: 1px solid;
	}
</style>
<center>
	<table>
		<tr>
			<td>Name</td>
			<td>Surname</td>
			<td>Address</td>
			<td>E-mail</td>
			<td>Tel</td>
		</tr>

		<tr>
			<td>{{$Customers->name}}</td>
			<td>{{$Customers->surname}}</td>
			<td>{{$Customers->address}}</td>
			<td>{{$Customers->email}}</td>
			<td>{{$Customers->tel}}</td>
		</tr>

	</table>
</center>
</body>
</html>