<?php
// Include website configuration
include_once 'config/config.php';

// Include database connection
include_once 'config/dbConnection.php';

include_once 'models/User.class.php';
$user = new User($db);

include_once 'models/Session.class.php';
$session = new Session();


if (!isset($_SESSION["user_id"])) {

	$adminTemplate = include_once 'controllers/user/login.php';

} else {





	$data =array();
	if(file_exists('mai.txt')) {
		$fp = fopen( 'mai.txt', 'r' );

		while ( !feof( $fp ) ) {
			$line = fgets( $fp, 2048 );

			$delimiter = "\t";
			$data []= str_getcsv( $line, $delimiter );

		}
		fclose( $fp );
	} else {
		echo "fisierul nu exista";
	}
	if (!empty($data)) {
		echo "<ul>";
		foreach ($data as $row) {
			if(!empty($row[2])){
				$ora = date_create_from_format('m-d-Y  h:i:s A', end($row));
				echo "<li>".$row[2]." : ".date("Y-m-d H:i:s",$ora->getTimestamp())."</li>";

			}
		}
		echo "</ul>";
	}

}

?>