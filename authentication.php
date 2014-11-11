<?php
$users = array('admin' => 'Master1234', 'hater' => '1hateu');
if(array_key_exists($_REQUEST['username'], $users) && $_REQUEST['pwd'] == $users[$_REQUEST['username']]) {

	$_SESSION['logged-in'] = true;
		header('Location: index.php');
}
else{
	header('Location: reg.php?fail=true');
}



?>