<?php

require ("Entities/Boarding_post_Entity.php");

class BoardingPostModel {
    
    
    //get distinct boarding categories from boadring_post table in database
    function GetBoardingCategories() {
        require 'Credentials.php';

        //Open connection and Select database.   
        $link= mysqli_connect($host, $user, $passwd) or die(mysql_error());
        mysqli_select_db($link,$database);
        $result = mysqli_query($link,"SELECT DISTINCT category FROM boarding_post") or die(mysql_error());
        $categories = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            array_push($categories, $row[0]);
        }
        mysqli_close($link);
        return $categories;
    }
    
    
    function GetBoardingbyCategory($category) {
        require 'Credentials.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($host, $user, $passwd) or die(mysql_error);
        mysqli_select_db($conn,$database);

        $query = "SELECT * FROM boarding_post WHERE category LIKE '$category'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $boardingPostArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $B_post_id   =$row[0]; 
            $category    =$row[1];
            $girlsBoys   =$row[2];
            $person_count=$row[3];
            $cost_per_person=$row[4];
            $rating      =$row[5];
            $image       =$row[6];
            $house_num   =$row[7];
            $lane        =$row[8];
            $city        =$row[9];
            $postal_code =$row[10];
            $district    =$row[11];
            $description =$row[12];
            $location    =$row[13];
            $lifespan    =$row[14];
            $post_amount =$row[15];
            $review      =$row[16];

            //Create coffee objects and store them in an array.
            $boarding_post = new Boarding_post_Entity(-1, $category, $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$postal_code,$district,$description,$location,$lifespan,$post_amount,$review);
            array_push($boardingPostArray, $boarding_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $boardingPostArray;
    }


    function GetBoardingDetailsToDisplay($id) {
        require 'Credentials.php';

        //Open connection and Select database.     
        $conn=mysqli_connect($host, $user, $passwd) or die(mysql_error);
        mysqli_select_db($conn,$database);

        $query = "SELECT * FROM boarding_post WHERE B_post_id LIKE '$id'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $boardingPostArray = array();

        //Get data from database.
        while ($row = mysqli_fetch_array($result)) {
            
            $B_post_id   =$row[0]; 
            $category    =$row[1];
            $girlsBoys   =$row[2];
            $person_count=$row[3];
            $cost_per_person=$row[4];
            $rating      =$row[5];
            $image       =$row[6];
            $house_num   =$row[7];
            $lane        =$row[8];
            $city        =$row[9];
            $postal_code =$row[10];
            $district    =$row[11];
            $description =$row[12];
            $location    =$row[13];
            $lifespan    =$row[14];
            $post_amount =$row[15];
            $review      =$row[16];

            //Create coffee objects and store them in an array.
            $boarding_post = new Boarding_post_Entity(-1, $category, $girlsBoys, $person_count, $cost_per_person, $rating, $image, $house_num,$lane,$city,$postal_code,$district,$description,$location,$lifespan,$post_amount,$review);
            array_push($boardingPostArray, $boarding_post);
        }
        //Close connection and return result
        mysqli_close($conn);
        return $boardingPostArray;
    }

}

?>