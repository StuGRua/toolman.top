<?php
    require('./connect.php');

    $sql = "insert into msg (title,content) values ('$_POST[_title]' ,'$_POST[_text]')"; 
	if(!mysql_query($sql)) {
		echo mysql_error();
		exit();
	} else {
		require('./board_list.php');
	}
?>