<?php

$servername ='localhost';
$username = 'root';
$password = '';
$dbname = "npc_database";

$api_key_value = "fca29d61";
$api_key="";
$vd=""; 



    
if(isset($_POST['api_key']))
    {
        $api_key = $_POST["api_key"];  
        echo $api_key;
    }
    
    if($api_key == $api_key_value){
 
        $vd = $_POST["verticaldistance"];
        $timeout = $_POST["timeout"];
        $daycounter = $_POST["daycounter"];
        $monthcounter = $_POST["monthcounter"];
        
        
        
        $conn = mysqli_connect( $servername, $username, $password);

        if(!$conn){
            die("Connection failed: ". mysqli_connect_error());
        }

        if($timeout == 15 || $timeout == 30 || $timeout == 45 || $timeout == 60 || $timeout == 75 || $timeout == 90 || $timeout == 105 ){
            
            
            $sql="INSERT INTO npc_database.tb_senordatatodays (sensordatatoday) values($vd)";

        }
        
    
        if($timeout == 105 && $daycounter<=7 )
        {
           
              
              $sql="INSERT INTO npc_database.tb_senordataweeks (sensordataweeks) values($vd)";
        }
        if($monthcounter == 3)
        {
              
              $sql="INSERT INTO npc_database.tb_senordatmonths (sensordatamonth) values($vd)";
        }
           
        if(mysqli_query($conn,$sql))
        {
        echo"\nNew record created sucessfully\n";

        }
        else
        {
            echo "Error: ".$sql ."<br />" .mysqli_error($conn);
        }

    }

else{

        echo"Wrong API key";
}