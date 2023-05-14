<?php
		// Your PHP code goes here
		$viewport_height = $_POST['viewport_height'];
		echo "<p>The viewport height is: " . $viewport_height . " pixels</p>";
	?>
    <?php
if (isset($_POST['viewport_height'])) {
  $height = $_POST['viewport_height'];
  echo "Viewport height is: " . $height;
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Example Page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}
	</style>
</head>
<body>
<?php
		// Your PHP code goes here
		$viewport_height = $_POST['viewport_height'];
		echo "<p>The viewport height is: " . $viewport_height . " pixels</p>";
	?>
	<form id="viewport-form" action="submit.php" method="post">
		<input type="hidden" name="viewport-height" id="viewport-height">
		<button type="submit" id="submit-btn" style="display: none;"></button>
	</form>
	<script>
		window.addEventListener('DOMContentLoaded', function() {
			var viewportHeight = window.innerHeight;
			if (!localStorage.getItem('viewportSubmitted')) {
				localStorage.setItem('viewportSubmitted', true);
				document.getElementById('viewport-height').value = viewportHeight;
				document.getElementById('submit-btn').click();
			}
		});
	</script>
</body>
</html>
<?php
		// Your PHP code goes here
		$viewport_height = $_POST['viewport_height'];
		echo "<p>The viewport height is: " . $viewport_height . " pixels</p>";
	?>