<?php

// users db table: id, username, hash_password(md5), first_name, last_name, email, tip, status, time_stamp

// table class method contruct with db and makeStatement with sql and date(placeholders for sql) as arguments

include_once "models/Table.class.php";

class Pachete extends Table {

	/**Find all pachete ulei by model
	 * @param $model
	 *
	 * @return object
	 */
	public function getAllMotors() {
		$sql = "SELECT motor FROM motoare";
		$statement = $this->makeStatement($sql);
		return $statement->fetchAll(PDO::FETCH_COLUMN, 0);
	}
	public function getPacheteUlei ($model,$tipMotor) {

		$sql = "SELECT * FROM pachete_ulei WHERE model=? AND tip_motor=?";

		$data = array($model,$tipMotor);

		$statement = $this->makeStatement($sql,$data);
		return $statement;
	}


}
