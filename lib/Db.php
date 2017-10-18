<?php
    /**
     * Class used to create a new PDO object, and 
     * allows the program to interact with the database.
     * Each connection to the database can be closed after
     * use, allowing for a JIT db connection.
    */
    
    /* Run the database config */
    require_once('../config/database-config.php');
    
    class Db {
        private $db;
        
        /**
         * Constructor used to connect to the database,
         * and return the connection object.
         * @return The Database Connection Object
        */
        public function __construct(){
            $host = DATABASE_CONF_HOST;
            $name = DATABASE_CONF_NAME;
            
            // Create the db object, and set the error reporting mode to thow errors under try / catch.
            $this->db = new PDO("mysql:host=$host;dbname=$name", DATABASE_CONF_USER, DATABASE_CONF_PASS);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $this->db;
        }
        
        /**
         * Function used to close th  database connection
        */
        public function close(){
            $this->db->close();
        }
    }