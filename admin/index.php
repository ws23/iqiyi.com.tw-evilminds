<?php session_start();
require_once(dirname(__FILE__) . "/../lib/std.php") ; 
?>
<!DOCTYPE html>
<?php require_once(dirname(__FILE__) . "/../config.php"); ?>
<html>
<head>
	<meta charset="utf8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<link rel="shortcut icon" href="<?php echo $URLPv . "img/" . $iconName; ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo $URLPv . "img/" . $iconName; ?>" type="image/x-icon">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<meta name="title" content="<?php echo $titleName; ?>">
	<meta name="description" content="">
	<meta name="author" content="臺灣愛奇藝股份有限公司">
	<title><?php echo $titleName; ?></title>

	<link href="<?php echo $URLPv; ?>lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<script src="<?php echo $URLPv; ?>lib/jquery/jquery-1.11.2.js"></script>
	<script src="<?php echo $URLPv; ?>lib/bootstrap/js/bootstrap.js"></script>

</head>
<body>
<?php
if(isset($_SESSION['UID'])) { // 已登入
?>
<!-- header start -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php"><img class="logo" src="<?php echo $URLPv . "img/" . $logoName; ?>"/></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="#list">劇集列表</a></li>
					<li><a href="#next">預告片</a></li>
					<li><a href="#other">精彩花絮</a></li>
					<li><a href="#photo">劇照</a></li>
					<li><a href="#activity">抽獎活動</a></li>
					<li><a href="#fb">網友互動</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#logout">登出</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- header end -->
<?php 
	// 劇集列表/現正熱映

	// 預告片

	// 精彩花絮

	// 劇照

	// 抽獎活動

	
} 
else if(isset($_POST['UID'])) { // 登入驗證
	
}
else { // 登入介面	
?>
<div class="container">
<form action="index.php" method="post">


</form>
</div>

<?php } 

require_once(dirname(__FILE__) . "/../lib/stdEnd.php"); 
?>
</body>
</html>
