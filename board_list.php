<?php 

require('./connect.php');


$sql = "select * from msg";
$rs = mysql_query($sql);

$data = array();
while($row = mysql_fetch_assoc($rs)) {
	$data[] = $row;
}
//print_r($data);

require('./board_list.html');

?>