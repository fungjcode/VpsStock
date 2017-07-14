<?php
/*
 * 获取相关VPS网页信息数据
 */

class getinfo {
	public function webinfo() {
		$url = 'https://xvmlabs.com/account/cart.php?a=add&pid=1';
		$html = file_get_contents($url);
		preg_match('|<h1>(.*?)<\/h1>|i', $html, $m);
		if ($m['1'] == 'Oops, there\'s a problem...') {
			return false;
		} else {
			return true;
		}

	}
}

$a = new getinfo;
$b = $a->webinfo();
if ($b == true) {
	echo '有货';
} else {
	echo '无货';
}
?>