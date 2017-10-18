<?php
    /**
     * Class used to handle the topics that have been
     * created, and can also be used to create new topics
     * and add them to the database.
    */
    
    class Topics {
        
        /**
         * Function used to get the topics from within
         * the database.
         * @return Array of the topics found.
        */
        public static function get_all(){
            $db = new Db();
            
            try{
                $query = $db->prepare("SELECT * FROM Topics");
                $query->execute();
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
            
            return $query->fetchAll();
        }
        
        /**
         * Function used to add a new topic
         * @param 
        */
        public static function create_topic($topic_title, $user_id)){
            
        }
    }