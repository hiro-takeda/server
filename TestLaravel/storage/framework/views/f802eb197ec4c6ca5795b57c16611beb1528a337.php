<html>
	<body>
		<form action="/hello" method="post">
			<?php echo csrf_field(); ?>
			<input type="text" name="name">
			<input type="submit" value="‘—M">
		</form>
	</body>
</html>