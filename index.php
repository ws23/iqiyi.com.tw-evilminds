<!DOCTYPE html>
<?php require_once('config.php'); ?>
<html>
<head>
	<meta charset="utf8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="<?php echo $URLPv . "img/" . $iconName; ?>" type="image/x-icon">
	<link rel="icon" href="<?php echo $URLPv . "img/" . $iconName; ?>" type="image/x-icon">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<meta name="title" content="<?php echo $titleName; ?>">
	<meta name="description" content="">
	<meta name="author" content="臺灣愛奇藝股份有限公司">

	<title><?php echo $titleName; ?></title>

	<link href="<?php echo $URLPv; ?>lib/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="index.css" rel="stylesheet">
	<script src="<?php echo $URLPv; ?>lib/jquery/jquery-1.11.2.js"></script>
	<script src="<?php echo $URLPv; ?>lib/bootstrap/js/bootstrap.js"></script>

<!-- Begin comScore Tag -->
	<script>
		var _comscore = _comscore || []; 
		_comscore.push({ c1: "2", c2: "17985150" }); 
		(function() {
			var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; 
			s.async = true; 
			s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js"; 
			el.parentNode.insertBefore(s, el); 
		})(); 
	</script>
	<noscript>
		<img src="http://b.scorecardresearch.com/p?c1=2&c2=17985150&cv=2.0&cj=1" />
	</noscript>
<!-- End comScore Tag -->

	<?php require_once(dirname(__FILE__) . '/lib/std.php'); ?> 
</head>
<body class="outliner">
<!-- preprocess start -->
<?php include_once("analyticstracking.php"); 
setLog($DBmain, 'info', 'into index', ''); ?>
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0]; 
			if(d.getElementById(id))
				return; 
			js = d.createElement(s); 
			js.id = id; 
			js.src="//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=748904491889773&version=v2.0"; 
			fjs.parentNode.insertBefore(js, fjs); 
		}(document, 'script', 'facebook-jssdk')); 
	</script>
<!-- preprocess end -->

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
					<li class="active"><a href="#">現正熱映</a></li>
					<li><a href="#list">劇集列表</a></li>
					<li><a href="#next">預告片</a></li>
					<li><a href="#other">精彩花絮</a></li>
					<li><a href="#photo">劇照</a></li>
					<li><a href="#activity">抽獎活動</a></li>
					<li><a href="#fb">網友互動</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="https://www.facebook.com/pps.iqiyi" target="_blank">
							粉絲團
							<img class="header-like" src="<?php echo $URLPv; ?>img/fblike.png" />
						</a>
					</li>
					<li>
						<div class="fblinkamount"><img class="amount" src="<?php echo $URLPv; ?>img/amount.png" />
						<?php echo getFacebookLikeAmount("http://www.facebook.com/pps.iqiyi"); ?></a>
						</div>
					</li>
					<li><a href="mailto:service@iqiyi.com.tw" target="_blank">聯絡我們</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<img class="background" src="img/background.png">
	<img class="act-logo" src="img/evilminds.png">
<!-- header end -->

<!-- body start -->
<div class="container">
	<!-- focus -->
	<div class="focus">
		<embed id="embed" class="embed" src="http://player.video.qiyi.com/ddfd1db5c177b5330f30752149daaaee/0/1985/v_19rrnsxt9k.swf-albumId=202467501-tvId=364887300-isPurchase=0-cnId=2" quality="high" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
	</div>
	<!-- 劇集列表 -->
	<a name="list"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">劇集列表</h3>
		</div>
		<div class="panel-body">
		<?php for($i=0; $i<6; $i++){ ?>
			<div class="video">
				<a href="#"><img src="img/uploads/video.jpg"/></a><br />
				<strong>第 <?php echo $i; ?> 集</strong><br />
				喔耶耶耶
			</div>
		<?php } ?>
		</div>
	</div>

	<!-- 預告片 -->
	<a name="next"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">預告片</h3>
		</div>
		<div class="panel-body">
		<?php for($i=0; $i<12; $i++){ ?>
			<div class="next">
				<a href="#"><img src="img/uploads/XDrz.jpg" /></a><br />
				<strong>我是標題</strong><br />
				XDDDD
			</div>
		<?php } ?>
		</div>
	</div>
	
	<!-- 精彩花絮 -->
	<a name="other"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">精彩花絮</h3>
		</div>
		<div class="panel-body">
		<?php for($i=0; $i<12; $i++ ){ ?>
			<div class="other">
				<a href="#"><img src="img/uploads/XDrz.jpg" /></a><br />
				<strong>我還是標題</strong><br />
				啊嗚嗚嗚嗚嗚~~~~~
			</div>
		<?php  }?>	
		</div>
	</div>

	<!-- 高清劇照 -->
	<script language="Javascript">
		function callFull(imgName){
			src = document.getElementById('photo-full'); 
			src.setAttribute('src', imgName); 
		}
	</script>

	<a name="photo"></a>
	<div class="panel panel-theme photo">
		<div class="panel-heading">
			<h3 class="panel-title">劇照</h3>
		</div>
		<div class="panel-body">
			<img id ="photo-full" class="full" src="img/uploads/full.jpg" />
		<?php
			$amount = 12;
			for($i=0; $i<$amount; $i++){
					?>
					<img src="img/uploads/thumbnails.jpg" onclick="callFull('img/uploads/full.jpg')" />
					<?php	
			}
		?>	
		</div>
	</div>

	<!-- 抽獎活動 -->
	<a name="activity"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">抽獎活動</h3>
		</div>
		<div class="panel-body">
		<?php
			require_once(dirname(__FILE__) . "/rules.php"); 
		?>
	</div>
</div>

<!-- 網友互動 -->
	<a name="fb"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">網友互動</h3>
		</div>
		<div class="panel-body">
			XDD
		</div>
	</div>
</div>
<!-- body end -->
<?php require_once(dirname(__FILE__) . "/lib/stdEnd.php"); ?> 
</body>
</html>
