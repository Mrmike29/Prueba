<?php
$x=144;
$y=999;
$resta="Resta: ";
$suma="Suma: ";
$multiplicacion="Multiplicación: ";
$division="División: ";
$Resta=$x-$y;
$Suma=$x+$y;
$Multiplicacion=$x*$y;
$Division=$x/$y;
?>
<center>
	<table border="3">
		<tr>
			<td>
				<?php	
					echo "<b>".$suma." ".$Suma."<b/>";
					echo "<br/>";
					echo "<b>".$resta." ".$Resta."<b/>";
					echo "<br/>";
					echo "<b>".$multiplicacion." ".$Multiplicacion."<b/>";
					echo "<br/>";
					echo "<b>".$division." ".$Division."<b/>";
				?>
			</td>
		</tr>
	</table>
</center>