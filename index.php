<!DOCTYPE html>
<html>
    <head>
        <title>Pizza PHP Index</title>
    </head>
    <body>
		<?php
			$ing=array();
			echo("
				<h1>Pizza Lover</h1>
				<form action='resultado.php' method='GET'>
					<table style='padding:10px'>
						<tr>
							<th style='background-color:blue' colspan='5'>Ingredientes a elegir (0,5 x Ingrediente):</th>
						</tr>
						<tr>					
							<td><input type='checkbox' name='ing[]' value='masa'/><b>Masa</b></td>
							<td><input type='checkbox' name='ing[]' value='bacon'/><b>Bacon</b></td>
							<td><input type='checkbox' name='ing[]' value='jamon'/><b>Jamon</b></td>
							<td><input type='checkbox' name='ing[]' value='oregano'/><b>Oregano</b></td>
							<td><input type='checkbox' name='ing[]' value='pollo'/><b>Pollo</b></td>					
						</tr>
					</table>
					<input type='submit' value='Enviar'/>
				</form>
			");
		?>
    </body>
 </html>
