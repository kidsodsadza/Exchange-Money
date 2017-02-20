<!DOCTYPE html>
<html>
<head>
	<title>Exchange Money</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="logo">
				<img src="logo.png">
			</div><!-- logo -->
			<form action="exchange.php" method="POST">
				<label class="la-money">EU:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="input-money" type="text" name="moneyeu" value="0"></label><br>
				<label class="la-money">KRW:&nbsp;<input class="input-money" type="text" name="moneykru" value="0"></label><br>
				<label class="la-money">JPY:&nbsp;&nbsp;&nbsp;<input class="input-money" type="text" name="moneyjpy" value="0"></label><br>
				<input class="submit-money" type="submit" name="submit">
			</form>
		</div><!-- container -->
	</div><!-- wrapper -->
</body>
</html>