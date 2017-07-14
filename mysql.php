<?php
/*
 * 风之翼灵
 * www.fungj.com
 * mysql链接
 */

class mysql {
	//数据库配置
	/*修改下面配置为你自己的链接
	* mysql端口默认3306并确认服务器MYSQL PDO支持
	*/
	protected $host = 'localhost'; //链接地址
	protected $dbname = 'vpsstock'; //数据库名称
	protected $dbuser = 'root'; //数据库用户名
	protected $dbpwd = '2130521'; //数据库密码
	//链接数据库
	public function db() {
		//链接数据库
		try {
			$pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->dbuser", "$this->dbpwd");
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
		//链接数据库
		try {
			$pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", "$this->dbuser", "$this->dbpwd");
			//读取数据库
			$sql = "UPDATE `vpsinfo` SET uptime = '$uptime',state = '$state' WHERE id = '$id';"; //更新数据
			$pdo->query('set names utf8;');
			$result = $pdo->query($sql);
			if ($result) {
				return true;
			} else {
				return false;
			}
		} catch (PDOException $e) {
			echo '数据库链接失败: ' . $e->getMessage();
			return false;
			exit();
		}
	}

}

?>