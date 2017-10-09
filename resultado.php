<!DOCTYPE html>
<html>
    <head>
        <title>Pizza PHP Resultado</title>
    </head>
    <body>
		<h1>Pizza Lover</h1>
		<?php
			$ing = $_GET["ing"];
			$precio = 5;
			$detector=0;
			foreach($ing as $i){
				$items[] = $i;
				if($i=="masa"){
					$detector += 1;
				}elseif($i=="oregano"){
					$detector += 2;
				}
				$precio += 0.5;
			}					
		?>
    </body>
 </html>
