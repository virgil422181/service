<?php

class Table {
    protected $db;

    /**
     * Blog database interaction class
     * @param PDO $db
     */
    public function __construct($db) {
        /* @var $db PDO */
        $this->db = $db;
    }
   
    /**
     * Method to interact with sql database
     * @param string $sql
     * @param array $data
     * @return StdClass object with all values from database as objects
     */
    protected function makeStatement($sql,$data=NULL) {
        $statement = $this->db->prepare($sql);
        try {
            $statement->execute($data);
        } catch (Exception $ex) {
            $msg = "<p>You tried to run this sql: $sql<p>"
                    . "<p>Exception: $ex</p>";
            trigger_error($msg); 
        }
        return $statement;
    }
    
    
}