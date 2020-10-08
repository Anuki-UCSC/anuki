<?php

require ("Entities/Food_post_Entity.php");

class FoodPostModel {
    
    
    //get distinct Food post types(long term/shor term) from Food_post table in database
    function GetFoodPostTypes() {
        require 'Credentials.php';

        //Open connection and Select database.   
        $link= mysqli_connect($host, $user, $passwd) or die(mysql_error());
        mysqli_select_db($link,$database);
        $result = mysqli_query($link,"SELECT DISTINCT type FROM food_post") or die(mysql_error());
        $types = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($types, $row[0]);
        }
        mysqli_close($link);
        return $types;
    }
    
    
    function GetFoodPostbyType($type) {
        require 'Credentials.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($host, $user, $passwd) or die(mysql_error);
        mysqli_select_db($conn,$database);

        $query = "SELECT * FROM food_post WHERE type LIKE '$type'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $FoodPostArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $F_post_id   =$row[0];
            $FSid        =$row[1]; 
            $ad_title    =$row[2];
            $description =$row[3];
            $address     =$row[4];
            $location    =$row[5];
            $type        =$row[6];
            $rating      =$row[7];
            $ordering_time_deadline   =$row[8];
            $lifespan    =$row[9];
            $post_amount =$row[10];
            $image       =$row[11];

            //Create foodpost objects and store them in an array.

            $food_post = new Food_post_Entity(-1,$FSid, $ad_title, $description, $address, $location, $type, $rating, $ordering_time_deadline,$lifespan,$post_amount,$image);
            array_push($FoodPostArray, $food_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $FoodPostArray;
    }


    function GetFoodPostDetailsToDisplay($id) {
        require 'Credentials.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($host, $user, $passwd) or die(mysql_error);
        mysqli_select_db($conn,$database);

        $query = "SELECT * FROM food_post WHERE F_post_id LIKE '$id'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $foodPostArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $F_post_id   =$row[0];
            $FSid        =$row[1]; 
            $ad_title    =$row[2];
            $description =$row[3];
            $address     =$row[4];
            $location    =$row[5];
            $type        =$row[6];
            $rating      =$row[7];
            $ordering_time_deadline   =$row[8];
            $lifespan    =$row[9];
            $post_amount =$row[10];
            $image       =$row[11];
            

            //Create foodpost objects and store them in an array.
            $food_post = new Food_post_Entity(-1,$FSid, $ad_title, $description, $address, $location, $type, $rating, $ordering_time_deadline,$lifespan,$post_amount,$image);
            array_push($foodPostArray, $food_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $foodPostArray;
    }

}

?>