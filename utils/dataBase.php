<?php
    class DataBase{
        public static function connect($host='localhost',$user='root',$pwd='',$db='bbdd_steakehouse'){

            $con = new mysqli($host,$user,$pwd,$db);
            //Check connection
            if($con === false){
                die("ERROR: could not connect. ". $con->connect_error);
            }

            //Print host information 
            //echo "Connect Successfully. Host info: " . $con->host_info;
            return $con;
        }

    }
    
?>