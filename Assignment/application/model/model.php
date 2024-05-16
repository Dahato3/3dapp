<?php

class Model
{
    // Property declaration, it's a variable / handler that points to the db connection, will become a PDO obeject
    public $dbhandle;

    public function __construct()
    {
        //Database source name
        $dsn = 'sqlite:./db/virtualMuseum.db';

        // Then create a connection to the database using the PDO() function
        try {
            // String will change for different database connections
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                                                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                        PDO::ATTR_EMULATE_PREPARES => false,
                                                        ));
            // $this->$dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOEXception $e)
        {
            echo 'Unsucceful connection to database';
            // Error message if failed connection
            print new Exception($e->getMessage());
        }
    }

    function dbCreateTable()
    {
        try
        {
            $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, brand TEXT , x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created inside the test1.db file";
        }
        catch (PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    function dbInsertData()
    {
        try
        {
            $this->dbhandle->exec(
                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (1, 'Costa1', 'A 3D Render of my first costa model', 'Created in blender and exported to be an inline X3DOM', 'Costa Smooth Frappé', 'Weve been serving great coffee with our legendary Signature blend since 1971. So, whether you need a pick-me-up, a chance to chill out or just want to hit reset, you can lose yourself in our sensationally smooth Costa Coffee Frappe. Its thick, its creamy and its seriously indulgent. Shake it up and enjoy.');" );

                
                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (2, 'Costa2', 'A 3D Render of my second costa model', 'Created in blender and exported to be an inline X3DOM', 'Costa Choc Fudge Frappé', 'Weve been serving great coffee with our legendary Signature blend since 1971. So, whether you need a pick-me-up, a chance to chill out or just want to hit reset, you can lose yourself in our sensationally smooth Choc Fudge Brownie Frappe. This is Costa coffee blended with the luscious flavours of a chocolate fudge brownie. Its thick, its creamy and its seriously indulgent. Shake it up and enjoy.');" );

                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (3, 'Costa3', 'A 3D Render of my third costa model', 'Created in blender and exported to be an inline X3DOM', 'Costa Caramel Swirl Frappé', 'Weve been serving great coffee with our legendary Signature blend since 1971. So, whether you need a pick-me up, a chance to chill out or just want to hit reset, you can lose yourself in our sensationally smooth Caramel Swirl Frappe. Its thick, its creamy and its seriously indulgent. Shake it up and enjoy.');" );

                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (4, 'Oasis1', 'A 3D Render of my first oasis model', 'Created in blender and exported to be an inline X3DOM', 'Oasis Summer Fruits', 'The UKs number one on-the-go juice drink, this time with your favourite summer fruits.');" );

                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (5, 'Oasis2', 'A 3D Render of my second oasis model', 'Created in blender and exported to be an inline X3DOM', 'Oasis Citrus Punch', 'The UKs number one on-the-go juice drink, this time with a citrusy punchy.');" );

                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (6, 'Oasis3', 'A 3D Render of my third oasis model', 'Created in blender and exported to be an inline X3DOM', 'Oasis Exotic Fruits Zero' ,'Oasis Zero Exotic Fruits is a refreshing blend of mango and passion fruit flavours with no calories and no sugar.');");

                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (7, 'Fanta1', 'A 3D Render of my first fanta model', 'Created in blender and exported to be an inline X3DOM', 'Fanta Orange Can', 'Bright, bubbly, instantly refreshing and great tasting. Fanta Orange is made with 100% natural flavours, fruit juice and is caffeine free.');" );
                    
                // "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                //     VALUES (8, 'Fanta2', 'A 3D Render of my second fanta model', 'Created in blender and exported to be an inline X3DOM', 'Fanta Twist Can', 'A juicy blast of fruity flavours and fruit juice.');" );

                "INSERT INTO Model_3D (Id, brand, x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription)
                    VALUES (9, 'Fanta3', 'A 3D Render of my third fanta model', 'Created in blender and exported to be an inline X3DOM', 'Fanta Lemon Can', 'Tongue tingling refreshing with a lemony zing & fruit juice.');" );
                return "X3D model data inserted successfully inside test1.db";
            
        }
        catch (PDOEXception $e)
        {
            print new Exception($e->getMessage());
        }
    }

    function dbGetData()
    {
        try
        {
            // Prepares a statement to get ALL records from the Model_3D table
            $sql = 'SELECT * FROM Model_3D';
            // User PDO query() to query the db with the prepared statement
            $stmt = $this->dbhandle->query($sql);
            //Set up an array to return the results
            $result = null;
            // Variable to index each resulting row
            $i = 0;
            // Use PDO fetch() to retrieve the results from the database using a while loop
            while ($data = $stmt->fetch())
            {
                $result[$i]['brand'] = $data['brand'];
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];
                // Increment row index
                $i++;
            }

        }
        catch (PDOEXception $e)
        {
            print new Exception ($e-> getMessage());
        }
        // Closes database connection
        $this->dbhandle = NULL;
        // Sends the response back to the view
        return $result;

    }

    function dbGetBrand()
    {
        //Returning brand names
        return array("-", "Costa1", "Costa2", "Costa3" , "Oasis1", "Oasis2", "Oasis3" , "Fanta1", "Fanta2", "Fanta3");
    }
}
?>