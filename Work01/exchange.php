<!-- eu=0.03
krw=33
jpy=3.58757333 -->
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
			<?php  
				$moneyeu = $_POST["moneyeu"];
				$moneykru = $_POST["moneykru"];
				$moneyjpy = $_POST["moneyjpy"];
				$eu=0.03;
				$krw=33;
				$jpy=3.58757333;

				$sum1=$moneyeu*$eu;
				$sum2=$moneykru*$krw;
				$sum3=$moneyjpy*$jpy;

			?>
				<div class="label-con"><label class="la-money">EU:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$sum1"?>&nbsp;&nbsp;EU</label></div><br>
				<div class="label-con"><label class="la-money">KRW:&nbsp;<?php echo "$sum2"?>&nbsp;&nbsp;KRW</label></div><br>
				<div class="label-con"><label class="la-money">JPY:&nbsp;&nbsp;&nbsp;<?php echo "$sum3"?>&nbsp;&nbsp;JPY</label></div><br>
				<a href="index.php"><input class="submit-money ex-botton" type="submit" name="submit" value="กลับไปหน้าแรก"></a>
		</div><!-- container -->
	</div><!-- wrapper -->

</body>
</html>