<?php 
	session_start(); 
	require_once(dirname(__FILE__) . "/../lib/std.php"); 

	if(!isset($_SESSION['UID'])){
		alert('Login Error. ')	; 
		setLog($DBmain, 'error', 'don\'t have session. '); 
		locate('index.php'); 
	}
	else {
		$type = ["v", "n", "o"];
		
		foreach($type as $arr) {
			if($arr == 'v')
				$DBTable = "video"; 
			else if($arr == 'n')
			    $DBTable = "next"; 
			else if($arr == 'o')
			    $DBTable = "other"; 
			else {
			    setLog($DBmain, 'error', 'have error type', $_SESSION['UID']); 
			    continue; 
			}

			$result = $DBmain->query("SELECT * FROM `{$DBTable}` WHERE `state` < 2; "); 
			while($row = $result->fetch_array(MYSQLI_BOTH)) {
				$tmp = $arr . '_' . $row['id'] . '_'; 

				
				$str = ""; 
                if($_POST[$tmp . 'state'] == "able")  
                    $str .= "`state` = 0";
                else if($_POST[$tmp . 'state'] == "disable")
                    $str .= "`state` = 1";
                else 
				    setLog($DBmain, 'error', 'have error post `state`', $_SESSION['UID']); 
				if($str!="")
					$DBmain->query("UPDATE `{$DBTable}` SET {$str} WHERE `id` = {$row['id']}; "); 


				if($_POST[$tmp . 'act'] == "read")
					continue; 

				else if($_POST[$tmp . 'act'] == "edit") {
					$str = "UPDATE `{$DBTable}` SET `title` = '{$_POST[$tmp . 'title']}', `text` = '{$_POST[$tmp . 'text']}', `linkURL` = '{$_POST[$tmp . 'link']}'"; 
					if($arr == 'v')
						$str .= ", `videoURL` = '{$_POST[$tmp . 'video']}'"; 
					$str .= " WHERE `id` = {$row['id']}; "; 
					$DBmain->query($str); 
					setLog($DBmain, 'info', "edit `$DBTable` #{$row['id']}", $_SESSION['UID']); 
				}
				else if($_POST[$tmp . 'act'] == "delete") {
					$DBmain->query("UPDATE `{$DBTable}` SET `state` = 2 WHERE `id` = {$row['id']}; "); 
					setLog($DBmain, 'info', "delete `{$DBTable}` #{$row['id']}", $_SESSION['UID']); 
				}
				else
					setLog($DBmain, 'error', 'have error post `act`', $_SESSION['UID']); 
			}

			if($_POST[$arr . '_0_act'] == "edit") {
				$now = date('Y-m-d', time());
				var_dump($_FILES) ; 
				$imgURL = "img/uploads/{$now}-{$_FILES[$arr . '_0_img']['name']}"; 

				move_uploaded_file($_FILES[$arr . '_0_img']['tmp_name'], dirname(__FILE__) . "/../" . $imgURL); 
				setLog($DBmain, 'info', 'upload image', $_SESSION['UID']); 

				$state = $_POST[$arr . '_0_state'] =="able"? 0:1;
				$text = $_POST[$arr . '_0_text'] ; 
				$title = $_POST[$arr . '_0_title']; 
				$link = $_POST[$arr . '_0_link']; 
				
				if($arr == 'v') {
					$video = $_POST[$arr . '_0_video']; 
					$DBmain->query("INSERT INTO `{$DBTable}` (`mainID`, `title`, `text`, `state`, `imageURL`, `linkURL`, `videoURL`) VALUES (1, '{$title}', '{$text}', {$state}, '{$imgURL}', '{$link}', '$video'); "); 
				}
				else
					$DBmain->query("INSERT INTO `{$DBTable}` (`mainID`, `title`, `text`, `state`, `imageURL`, `linkURL`) VALUES (1, '{$title}', '{$text}', {$state}, '{$imgURL}', '{$link}'); "); 

				setLog($DBmain, 'info', "new {$DBTable}"); 
			}
		}	 
	}
	require_once(dirname(__FILE__) . "/../lib/stdEnd.php"); 
	locate('index.php'); 
?>
