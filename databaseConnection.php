<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *  databaseConnection
 *
 * @author 208317490
 */
class databaseConnection
{
    private $username = "root";
    private $password = " ";
    private $host = "localhost";
    private $db_name = "Users";
    private $con;
    
    //this function connects to the databse
    public function establishConnection()
    {
        //$db = mysql_select_db("Users");
        $conn = mysql_connect($this->host, $this->username, $this->password) or die("Could not connect to database.");
        
        //testing the connection
        if(!$conn)
        {
            die ("Cannot connect to the database");
        }
        else
        {

            $this->con = $conn;

            echo "Connection established";

        }

        return $this->con;
    }
    
    //this function selects the database
    public function selectDatabase()
    {
        $select_db = mysql_select_db($this->database);

        if(!$select_db)
        {

            echo "Could not select database.".$this->database;

        }
         echo "Database selection successfull.";
    }


    public function execute()
    {
        return $query = mysql_query("select * from users");
    }
}
?>
