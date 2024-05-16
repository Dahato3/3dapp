
<?php
        include '../../debug/ChromePhp.php';
        ChromePhp::log('modelDrinkDetails.php: Hellow World');
        ChromePhp::log($_SERVER);
		// get the brand bame
        ChromePhp::warn('modelDrinkDetails.php: Get Brand details');
		$brandName = $_GET['brand']; 

        ChromePhp::warn('modelDrinkDetails.php: make a connecton to test1.db');
		// Connect to the database table and retrieve the required brand data
 		try {		
 			// Make a connection to the drinks database
			$dbhandle = new PDO('sqlite:../../db/virtualMuseum.db', 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));

            ChromePhp::warn('modelDrinksDetails.php: Connected to test1.db');
			// Prepare a SQL statement to select a record matching the brand name selected in the view drop-down list
            ChromePhp::warn('modelDrinkDetails.php: Prepare PDO SQL statement');
			$sql = 'SELECT * FROM Model_3D WHERE brand = "'. $brandName. '"';
            ChromePhp::warn($sql);
			
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $dbhandle->query($sql);
		
			// Set up an array to return the results to the view
			$result = null;
			
			// Set up a variable to index each row of the array
			$i=0;	
			
			// Use PDO fetchall() the results from the database using a while loop
			// Use a while loop to loop through the table rows — there may be more than one record with the same brand name
			while ($data = $stmt->fetch()) {
				
				// Write the database contents to the results array for sending back to the view
				$result[$i]['brand'] = $data['brand'];
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
				
				// increment the row index
				$i++;
			}
		}
		catch (PDOEXception $e) {
        	print new Exception($e->getMessage());
    	}
    	
    	// Close the database connection
		$dbhandle = NULL;
		
		echo json_encode($result);

 ?>
