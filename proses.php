<?php

if (isset($error)) {
	echo '<b>Error</b>: <br />'.implode('<br />', $error);
} else {

	$data = '';
	foreach ($_POST as $k => $v) {
		$data .= "$k : $v<br />";
	}

	echo '<b>Form berhasil disubmit. Berikut ini data anda:</b><br />';
	echo $data;
}
die();
?>