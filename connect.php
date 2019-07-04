<?php
    header("Content-type:text/html;charset='utf8'");
    $conn = mysql_connect('localhost','account','password');
    mysql_query('set names utf8',$conn);
    mysql_query('use base_name',$conn);
?>