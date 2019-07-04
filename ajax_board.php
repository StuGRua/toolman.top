<?php
    require('./connect.php');

    $sql = "insert into msg (title,content) values ('$_POST[_title]' ,'$_POST[_text]')"; 
    $_title=$_POST[_title];
    $_text=$_POST[_text];

	if(!mysql_query($sql)) {
		echo mysql_error();
		exit();
    } 
    // else 
    // {
    //     $_data=array(
    //         "_title" => $_title,
    //         "_text" =>$_text,
    //     );
    //     echo $_data;
    // }
        //wdnmd写不下去了

?>