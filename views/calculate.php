<html>
<head>
    <title>Multiplication Table</title>
	<meta charset="utf-8">
	<meta name="viewport" width="device-width, initial-scale=1">
 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="shortcut icon" href="https://raw.githubusercontent.com/ARulzz/My-first-page/master/A_copyright.png">
</head>
<body style="background-color: #101010">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-2 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4" style="background-color: #9e9e9e; height: 100vh;">
		<div class="row" style="padding: 20px; font-size: 20px;">
			<center><i><strong>Multiplication Table</strong></i></center>
		</div>
		<div class="row" style="padding: 20px">
			<form method="post" action="calculate.php">
    	    	<strong>Enter your number here:</strong> <br>
	        	<input type="text" name="num" size="20">
        		<input type="submit" value="Get Table">
    		</form>	
		</div>
		<div class="row" style="padding: 20px;">
			<?php
				echo "<table border=\"5\">";
				$num = $_POST['num'];
				if($num)
				{
    				for ($i=1; $i<=10; $i++)
    				{
        				echo'<tr>';
        				echo '<td style="width: 100px;"><center>'.$num.' x '.$i.'</center></td>';
        				echo '<td style="width: 50px;"><center>'.$num*$i.'</center></td>';
						echo '</tr>';
				    }
				}
				else
				{
    				echo "Invalid Entry!";
				}
			?>
		</div>
	</div>
</body>
</html>