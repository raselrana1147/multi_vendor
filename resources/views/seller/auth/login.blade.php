
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<h2>Seller Login</h2>

	<form action="{{ route('seller.login') }}" method="post">
		@csrf
		<input type="text" name="email">
		<input type="password" name="password">
		<button type="submit">Login</button>
	</form>

</body>
</html>