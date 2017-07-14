<?php
/*
 * 获取相关VPS网页信息数据
 */
include 'mysql.php';
class getinfo {
	//读取数据库信息
	public function readsql() {
		$db = new mysql;
		$dbinfo = $db->db();
		return $dbinfo;
	}

	//更新存库信息
	public function update() {
		$a = new getinfo;
		$b = $a->readsql();
		//循环读取数据库中的商家信息
		foreach ($b as $key => $value) {
			$url = $value['buylink'];
			$html = file_get_contents($url);
			preg_match('|<h1>(.*?)<\/h1>|i', $html, $m);
			if ($m['1'] == 'Oops, there\'s a problem...') {
				//无货
				$id = $value['id'];
				$state = '1'; //1无货
				$uptime = date('Y-m-d H:i:s', time()); //更新时间
				$db = new mysql;
				$dbinfo = $db->updatedb($id, $state, $uptime);
			} else {
				//无货
				$id = $value['id'];
				$state = '0'; //0有货
				$uptime = date('Y-m-d H:i:s', time()); //更新时间
				$db = new mysql;
				$dbinfo = $db->updatedb($id, $state, $uptime);
			}
		}
	}
}
//执行方法，更新数据
$a = new getinfo;
$b = $a->update();
?>