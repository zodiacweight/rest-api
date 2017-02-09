<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rest API</title>
</head>
<body>
<p>Hello, Dev! See which segments we have:</p>
<?php
require_once 'segments.php';
foreach ($segments as $segment):
	?>
<div><?php echo $segment;?></div>
	<?php
endforeach;
?>
</body>
</html>