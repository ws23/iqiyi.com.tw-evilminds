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
	<meta property="fb:app_id" content="<?php echo $FBCommentID; ?>">

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

<!--
Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Click Exclusion
URL of the webpage where the tag is expected to be placed: http://www.iqiyi.com
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 05/12/2015
-->
	<script type="text/javascript">
		var axel = Math.random() + "";
		var a = axel * 10000000000000;
		document.write('<iframe src="https://4861630.fls.doubleclick.net/activityi;src=4861630;type=invmedia;cat=0lqxydlz;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
	</script>
	<noscript>
		<iframe src="https://4861630.fls.doubleclick.net/activityi;src=4861630;type=invmedia;cat=0lqxydlz;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
	</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<!-- Start GA tracking code -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
			a=s.createElement(o),m=s.getElementsByTagName(o)[0];
			a.async=1;
			a.src=g;
			m.parentNode.insertBefore(a,m)
		    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-62920745-1', 'auto');
			ga('send', 'pageview');
	</script>
<!-- End GA tracking code -->

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
			if (d.getElementById(id)) 
				return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.3&appId=<?php echo $FBCommentID; ?>";
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
				<a class="navbar-brand" href="<?php echo "//" . $HOST; ?>"><img class="logo" src="<?php echo $URLPv . "img/" . $logoName; ?>"/></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">現正熱映</a></li>
					<li><a href="#list">劇集列表</a></li>
					<li><a href="#next">預告片</a></li>
					<li><a href="#other">精彩花絮</a></li>
					<li><a href="#photo">劇照</a></li>
<!--					<li><a href="#activity">抽獎活動</a></li>-->
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
	<script>
		function changeVideo(str) {
			src = document.getElementById('focus'); 
			src.innerHTML = ""; 
			src.innerHTML = '<embed id="embed" class="embed" src="' + str + '" quality="high" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>'; 
		}

	</script>
	<div id ="focus" class="focus"><?php
		$result = $DBmain->query("SELECT `videoURL` FROM `video` WHERE `state` = 0 ORDER BY `id` DESC LIMIT 1; "); 
		$row = $result->fetch_array(MYSQLI_BOTH); 
	?>

		<embed id="embed" class="embed" src="<?php echo $row['videoURL']; ?>" quality="high" align="middle" allowScriptAccess="always" allowFullScreen="true" type="application/x-shockwave-flash"></embed>
	
	</div>
	<!-- 劇集列表 -->
	<a name="list"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">劇集列表</h3>
		</div>
		<div class="panel-body">
		<?php 
			$result = $DBmain->query("SELECT * FROM `video` WHERE `state` = 0 ORDER BY `id` ASC; "); 
			while($row = $result->fetch_array(MYSQLI_BOTH)){ 
		?>
			<div class="video">
				<p onclick="changeVideo('<?php echo $row['videoURL']; ?>')"><img src="<?php echo $URLPv . $row['imageURL']; ?>"/></p>
				<a href="<?php echo $row['linkURL']; ?>" target="_blank"><strong><?php echo $row['title']; ?></strong><br />
				<?php echo $row['text']; ?></a>
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
		<?php 
			$result = $DBmain->query("SELECT * FROM `next` WHERE `state` = 0 ORDER BY `id` ASC; "); 
			while($row = $result->fetch_array(MYSQLI_BOTH)){
		?>
			<div class="next">
				<p><a href="<?php echo $row['linkURL']; ?>" target="_blank"><img src="<?php echo $URLPv . $row['imageURL']; ?>"/></a></p>
				<a href="<?php echo $row['linkURL']; ?>" target="_blank"><strong><?php echo $row['title']; ?></strong><br />
				<?php echo $row['text']!=''? $row['text'] : '&nbsp;'; ?></a>
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
		<?php 
			$result = $DBmain->query("SELECT * FROM `other` WHERE `state` = 0 ORDER BY `id` DESC; "); 
			while($row = $result->fetch_array(MYSQLI_BOTH)) {
		 ?>
			<div class="other">
				<p><a href="<?php echo $row['linkURL']; ?>" target="_blank"><img src="<?php echo $URLPv . $row['imageURL']; ?>" /></a></p>
				<a href="<?php echo $row['linkURL']; ?>" target="_blank"><strong><?php echo $row['title']; ?></strong><br />
				<?php echo $row['text']!=''? $row['text'] : '&nbsp; '; ?></a>
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
		<?php 
			$result = $DBmain->query("SELECT * FROM `photo` WHERE `state` = 0 ORDER BY `id` ASC LIMIT 10; "); 
			$row = $result->fetch_array(MYSQLI_BOTH); 
		?>
			<img id ="photo-full" class="full" src="<?php echo $URLPv . $row['full']; ?>" />
			<hr />
		<?php	do {	?>
				<img src="<?php echo $URLPv . $row['thumbnail']; ?>" onclick="callFull('<?php echo $URLPv . $row['full']; ?>')" />
		<?php	} while($row = $result->fetch_array(MYSQLI_BOTH)); 	?>	
		</div>
	</div>

	<!-- 抽獎活動 -->
<!--	<a name="activity"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">抽獎活動</h3>
		</div>
		<div class="panel-body">
		<?php
			require_once(dirname(__FILE__) . "/rules.php"); 
		?>
	</div>
</div>-->

<!-- 網友互動 -->
	<a name="fb"></a>
	<div class="panel panel-theme">
		<div class="panel-heading">
			<h3 class="panel-title">網友互動</h3>
		</div>
		<div class="panel-body">
			<div class="fb-comments" data-href="http:<?php echo $URLPv; ?>" data-width="100%" data-numposts="10" data-colorscheme="dark" data-order-by="reverse_time">
			</div>	
		</div>
	</div>
</div>
<!-- body end -->
<?php require_once(dirname(__FILE__) . "/lib/stdEnd.php"); ?> 
</body>
</html>
