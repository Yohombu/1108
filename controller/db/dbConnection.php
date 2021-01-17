<?php
    class DBConnection{
        private $connection;
        private  $dbConnetion;

        private function DBConnection(){
            $connection = new mysqli_connect("localhost","root","mysql","thogakade");
        }
        public function getInstance(){
            if($connection==NULL){
                return new DBConnection();
            }else{
                return $dbConnetion;
            }
        }
        public function getConnection(){
            return $connection;
        }


    }
    (new DBConnection())::getConnection()->getInstance();
    
?>