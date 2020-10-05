<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css" />
    </head>
    <body>
         
            <div class="header"> 
                
                    <h1>Bodima.lk</h1>
                
              <!--  <div class="user_signin_login">-->
                  <button class="button_signUp">Sign Up</button> 
                  <button class="button_logIn">LogIn</button> 
                <!--</div>-->
            </div>
            
            <nav class="menu_bar">
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Boardings.php">Boarding</a></li>
                    <li><a href="AboutUs.php">About Us</a></li>
                    <!-- comment after testing -->
                    <li><a href="BoardingPage.php">boarding page</a></li>
                    <!-- ********************* -->
                    <div class="search-container">
                        <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
            
<div class="row">
    
  <div class="col-9 col-s-9 content">
      
               <?php echo $content; ?>
  </div>


  <div class="col-3 col-s-12">
    <div class="aside">
      <h2>What?</h2>
      <p>Chania is a city on the island of Crete.</p>
      <h2>Where?</h2>
      <p>Crete is a Greek island in the Mediterranean Sea.</p>
      <h2>How?</h2>
      <p>You can reach Chania airport from all over Europe.</p>
    </div>
  </div>
</div>
        
        
 <div class="footer">
  <p>copyrignt@Bodima.lk corparation</p>
</div>
    </body>
</html>

