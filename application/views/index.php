<!doctype html>
<html>
	<head>
		<title>React page</title>
		<!-- css and stuff -->
	</head>
	<body>
		<!-- render server content here -->
		<div id="page"><?php echo $content;?></div>
		<!-- load react and app code -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
		<script src="<?php echo base_url(); ?>assets/table.js"></script>
		<script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
		<script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
		<script>
			<?php echo $js; ?>
		</script>
	</body>
</html>
