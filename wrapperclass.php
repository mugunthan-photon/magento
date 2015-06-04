<?php
class customerwrapper {
	public $firstname;
	public function createcustomer($firstname){
		$this->firstname = $firstname;
	}
}
$obj = new customerwrapper();
echo $obj->createcustomer("MS");
?>