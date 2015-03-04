<!doctype html>
<html lang=fr>
	<head>
		<meta name="viewport" content="width=device-width"/>
		<meta charset="UTF-8" />
		<title>Test</title>
		<link rel="stylesheet" href="css.css"/>
		<script type="text/javascript" src="js.js"></script>
		</head>
	<body>
		<?php
			require ("date.php");
			$date = new Date();
			$year = date('Y');
			$dates = $date->getAll($year);
		?>
		
		<div class="periods">
			<div class="year"><?php echo $year; ?></div>
			<div class="months">
				<ul>
					<?php foreach ($date->months as $id=>$m): ?>
						<a href="#" id="linkMonth<?php echo $id+1;?>"><?php echo utf8_encode(substr(utf8_decode($m),0,3)); ?></a></br>
					<?php endforeach;?>
				</ul>
			</div>
			<?php $dates = current($dates);?>
			<?php foreach($dates as $m=>$days): ?>
				<div class="month" id="month<?php echo $m; ?>">
					<table>
						<thead>
							<tr>
								<?php foreach ($date->days as $d): ?>
									<th><?php echo utf8_encode(substr(utf8_decode($d),0,3)); ?></th>
								<?php endforeach;?>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php foreach ($days as $d=>$w): ?>
								<td><?php echo $d;?></td>
							<?php endforeach;?>
							</tr>
						</tbody>
					</table>
				</div>
			<?php endforeach;?>
		</div>
		<pre><?php print_r($dates); ?></pre>
		
	</body>
</html>