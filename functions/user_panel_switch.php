<?php 
    function user_panel(){
        if(isset($_GET["ind"])){
            $ind = $_GET["ind"];
            switch($ind){
            
                case "dash":
                    include('../user_panel/sections/dashbored.php');
                    break;

                case "art":
                    include('../user_panel/sections/articles.php');
                    break;

                case "mes":
                    include('../user_panel/sections/messages.php');
                    break;

                case "prof":
                    include('../user_panel/sections/profile.php');
                    break;
            }
        }
    }
?>