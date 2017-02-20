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
				
				echo "$sum1";
?>