<?php
class testDanli {
	private	static $_ins;
	public $_dbname;
	private function __construct () {
	
	}

	//getInstance() 方法必须设置成公有 必须调用此方法

	public static function getInstance() {
		if (self::$_ins === null) {
			self::$_ins = new testDanli();
			//self::$_ins = new self();

		}
		return self::$_ins;
	}

	public function getDbName() {
		echo $this->_dbname;
	}

	public function setDbName($dbname) {
		$this->_dbname = $dbname;
	}
}

$A = testDanli::getInstance();
$A->setDbName('klj');
$A->getDbName();

unset($A);
$B = testDanli::getInstance();
$B->getDbName();
$C = testDanli::getInstance();
$C->getDbName();

?>
