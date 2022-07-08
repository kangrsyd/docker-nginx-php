<?php
if (isset($_REQUEST['phpinfo'])) {
	echo phpinfo();
	return false;
}

$version = 'Nginx v' . str_replace('nginx version: nginx/', '', shell_exec('nginx -v 2>&1')) . ' — PHP v' . PHP_VERSION;
?>

<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet" />
	<style>
		body {
			font-family: "DM Sans", Tahoma, arial, sans-serif;
		}
	</style>
	<title>Welcome to <?= $version ?></title>
</head>

<body style="margin: 0; padding: 0 15px; height: 100vh; display: flex; align-items: center; justify-content: center">
	<div style="text-align: center">
		<img src="data:image/png;base64,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" style="pointer-events: none" />
		<h1 style="font-size: 3.5rem; line-height: 85%">Welcome to nginx + <a href="?phpinfo=1" title="return phpinfo();" style="color: #2196f3; text-decoration: none;">php</a></h1>
		<div style="font-size: 1.25rem; color: #777">
			<div style="margin-bottom: 10px">This image built with <span style="color: red">&#10084;</span> by us!</div>
			<small><?= $version ?></small>
		</div>
	</div>
</body>

</html>