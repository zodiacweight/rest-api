<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>Hello, You!</p>
<?php
require_once 'path.php';
ob_end_clean();
var_dump($segments, $location);
?>
</body>
</html>