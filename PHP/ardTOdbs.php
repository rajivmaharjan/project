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
        $hourdecider = $_POST["hourdecider"];
        $exportdaydata = $_POST["exportdaydata"];
        $exportmonthdata = $_POST["exportmonthdata"];
        $exportWeekdata = $_POST["exportWeekdata"];
        $boot_counter = $_POST["boot_counter"];
    
        $conn = mysqli_connect( $servername, $username, $password);

        if(!$conn){
            die("Connection failed: ". mysqli_connect_error());
        }
        if($boot_counter)
        {
             $sql="TRUNCATE table npc_database.tb_sensordatatodayhistory";
        }
        if($hourdecider<=6){
            $sql="INSERT INTO npc_database.tb_sensordatatodayhistory (sensordatahistory) values($vd);
            INSERT INTO npc_database.tb_sensordatahours (sensordatahour) values($vd)";
            
        }
        if($exportdaydata)
        {
            $sql="INSERT INTO npc_database.tb_senordatatodays (sensordatatoday) values($vd);
            INSERT INTO npc_database.tb_sensordatatodayhistory (sensordatahistory) values($vd);
            INSERT INTO npc_database.tb_sensordatahours (sensordatahour) values($vd)";   
        }
        if($exportWeekdata)
        {
            $sql="INSERT INTO npc_database.tb_senordataweeks (sensordataweeks) values($vd);
            INSERT INTO npc_database.tb_sensordataweekhistory (sensordataweekhistory) values($vd);
            INSERT INTO npc_database.tb_senordatatodays (sensordatatoday) values($vd);
            INSERT INTO npc_database.tb_sensordatatodayhistory (sensordatahistory) values($vd);
            INSERT INTO npc_database.tb_sensordatahours (sensordatahour) values($vd)";
        
        }
        if($exportmonthdata)
        {
            $sql="INSERT INTO npc_database.tb_senordatmonths (sensordatamonth) values($vd);
                INSERT INTO npc_database.tb_senordataweeks (sensordataweeks) values($vd);
                INSERT INTO npc_database.tb_sensordataweekhistory (sensordataweekhistory) values($vd);
                INSERT INTO npc_database.tb_senordatatodays (sensordatatoday) values($vd)
                INSERT INTO npc_database.tb_sensordatatodayhistory (sensordatahistory) values($vd);
                INSERT INTO npc_database.tb_sensordatahours (sensordatahour) values($vd)";
        }

        


        if(mysqli_multi_query($conn,$sql))
        {
            echo"\nOperation sucessfully\n";

        }
        else
        {
            echo "Error: ".$sql ."<br />" .mysqli_error($conn);
        }

    }

else{

        echo"Wrong API key";
}