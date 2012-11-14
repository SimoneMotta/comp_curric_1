<!DOCTYPE >
<html>
	<head>
		<meta charset="UTF-8">
		<?php 
			$title = "Site.com";
			$subtitle = "este é um site em PHP";
		?>
		<title><?php echo "$title - $subtitle" ?></title>
	</head>
	<body>
		<div class="rodape">
			<p> &reg; copyright Site.com – <?php echo date("Y")?></p>
		</div>
	</body>
</html>