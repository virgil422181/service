<?php

include_once "models/Table.class.php";

class Angajat extends Table {


	/**
	 * Adauga angajat nou
	 * @param $prenume
	 * @param $nume
	 * @param $functie
	 * @return Boolean - True if succeed / False if faliled
	 */
	public function createAngajat ($prenume,$nume,$functie)
	{
		$sql = "INSERT INTO angajati  (prenume,nume,functie)"
		       . " VALUES( ?, ?, ?)";
		$date = array($prenume,$nume,$functie);
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
	public function updateAngajat($id,$prenume,$nume,$functie )
	{
		$sql = " UPDATE angajati SET prenume=?, nume=?, functie=? WHERE id=?"
		       . " VALUES( ?, ?, ?, ?)";
		$date = array($prenume,$nume,$functie,$id);
		$statement = $this->makeStatement( $sql, $date );
		return $statement;
	}

	/**
	 * Sterge angajat
	 * @param $id
	 * @return Boolean - True if succeed / False if faliled
	 */
	public function deleteAngajat($id)
	{
		$sql = "DELETE FROM angajati WHERE id=?";
		$date = array( $id );
		$statement = $this->makeStatement( $sql, $date );
		return $statement;
	}

	/**
	 * Extrage toti angajatii din tabela
	 * @return Array - Returneaza tabela intrun array
	 */
	public function getAllAngajatii() {
		$sql = "SELECT * FROM angajati";
		$statement = $this->makeStatement($sql);
		return $statement->fetchAll();
	}

	/**
	 * Extrage un angajat din tabela dupa $id
	 * @param $id
	 * @return array
	 */
	public function getAngajatById($id)
	{
		$sql = "SELECT * FROM angajati WHERE id=?";
		$date = array( $id );
		$statement = $this->makeStatement( $sql, $date );
		return $statement->fetchAll(PDO::FETCH_COLUMN, 0);

	}

}
