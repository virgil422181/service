<?php

include_once "models/Table.class.php";

class Modele extends Table {


	/**
	 * Adauga angajat nou
	 * @param $prenume
	 * @param $nume
	 * @param $functie
	 * @return Boolean - True if succeed / False if faliled
	 */
	public function createModel ($marca,$model,$cod)
	{
		$sql = "INSERT INTO modele  (marca,model,cod)"
		       . " VALUES( ?, ?,?)";
		$date = array($marca,$model,$cod);
		$statement = $this->makeStatement( $sql, $date );
		return $statement;
	}

	/**
	 * Actualizeaza angajat existent
	 * @param $id
	 * @param $prenume
	 * @param $nume
	 * @param $functie
	 * @return Boolean - True if succeed / False if faliled
	 */
	public function updateModel($id,$marca,$model,$cod )
	{
		$sql = " UPDATE modele SET marca=?, model=?, cod=? WHERE id=?"
		       . " VALUES( ?, ?, ?, ?)";
		$date = array($marca,$model,$cod,$id);
		$statement = $this->makeStatement( $sql, $date );
		return $statement;
	}

	/**
	 * Sterge angajat
	 * @param $id
	 * @return Boolean - True if succeed / False if faliled
	 */
	public function deleteModel($id)
	{
		$sql = "DELETE FROM modele WHERE id=?";
		$date = array( $id );
		$statement = $this->makeStatement( $sql, $date );
		return $statement;
	}

	/**
	 * Extrage toti angajatii din tabela
	 * @return Array - Returneaza tabela intrun array
	 */
	public function getAllModele() {
		$sql = "SELECT * FROM modele";
		$statement = $this->makeStatement($sql);
		return $statement->fetchAll();
	}

	/**
	 * Extrage un angajat din tabela dupa $id
	 * @param $id
	 * @return array
	 */
	public function getModelById($id)
	{
		$sql = "SELECT * FROM modele WHERE id=?";
		$date = array( $id );
		$statement = $this->makeStatement( $sql, $date );
		return $statement->fetchAll(PDO::FETCH_COLUMN, 0);
	}



}
