<?
	require 'steamauth/steamauth.php';
	require 'steamauth/userInfo.php';
	
        if (isset($_SESSION["steamid"]))
	{
		$id = $_SESSION['steamid'];
	}
	else
	{
	#not logged in
	}

?>
<!DOCTYPE html>
<html lang = 'en-US'>
<meta charset = 'UTF-8'>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<head>
		<title>CSGO-Boonie</title>
		<a href="https://twitter.com/BoonieCsgo" class="fa fa-twitter"></a>
		<div id="menu">
			<nav>
				<ul>
					<li><a href="index.php">CSGO-Boonie</a></li>
					<li><a href="earn/earn.php">Earn Coins</a></li>
					<li><a href="cash-out/cashout.php">Cash Out</a></li>
					<li><a href="flip.php">Flip</a></li>
					<li><a href="chat/index.php">Chat</a></li>
					<li><a href="#mine">Mine</a></li>
					<? if(isset($_SESSION['steamid'])) {?>
					<img src='<?=$steamprofile['avatar']?>'>
					<li><a href="?update">Refresh</a></li>
					<li><a href="steamauth/logout.php">Logout</a></li>
					<? } else {?>
					<li style="float: right;"><? echo loginbutton();?></li>
					<? }?>

				</ul>
			</nav>
		</div>
	</head>
	<body>
	<img src="img/4.png" style="width: 260px; height: 260px; float: right; margin-right: 7%;">
	<p style="margin-left: 45%; margin-top: 150px;">Free skins no<br>deposits required!</p>
	<img src="img/5.png" style="width: 260px; height: 260px;" margin-left: 8%;>
	</body>
</html>
