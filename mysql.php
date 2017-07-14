<?php
/*
 * mysql链接
 */

class mysql {
	public function db() {
		//数据库配置
		$host = 'localhost'; //链接地址
		$dbname = 'vpsstock'; //数据库名称
		$dbuser = 'root'; //数据库用户名
		$dbpwd = '2130521'; //数据库密码
		//链接数据库
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", "$dbuser", "$dbpwd");
			//读取数据库
			$sql = "SELECT * FROM `vpsinfo`";
			$pdo->query('set names utf8;');
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			return $rows;
		} catch (PDOException $e) {
			echo '数据库链接失败: ' . $e->getMessage();
			return false;
			exit();
		}
	}

	//更新数据库内容
	public function updatedb($id, $state, $uptime) {
		$host = 'localhost'; //链接地址
		$dbname = 'vpsstock'; //数据库名称
		$dbuser = 'root'; //数据库用户名
		$dbpwd = '2130521'; //数据库密码
		//链接数据库
		try {
			$pdo = new PDO("mysql:host=$host;dbname=$dbname", "$dbuser", "$dbpwd");
			//读取数据库
			$sql = "UPDATE vpsinfo SET age=age+1;";
			$pdo->query('set names utf8;');
			$result = $pdo->query($sql);
			$rows = $result->fetchAll();
			return $rows;
		} catch (PDOException $e) {
			echo '数据库链接失败: ' . $e->getMessage();
			return false;
			exit();
		}
	}

}

?>