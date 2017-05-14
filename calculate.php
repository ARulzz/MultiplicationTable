<?php
echo "<table border=\"1\">";
$num = $_POST['num'];
if($num)
{
    for ($i=1; $i<=10; $i++)
    {
        echo'<tr>';
        echo '<td style="width: 100px;"><center>'.$num.' x '.$i.'</center></td>';
        echo '<td style="width: 50px;"><center>'.$num*$i.'</center></td>';
		echo '</tr>'; // close tr tag here
    }
}
else
{
    echo "Invalid Entry!";
}
?>