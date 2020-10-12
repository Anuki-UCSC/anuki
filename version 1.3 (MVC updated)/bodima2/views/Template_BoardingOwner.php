<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <!-- <link rel="stylesheet" type="text/css" href="Styles/StyleSheet.css" /> -->
      <link rel="stylesheet" type="text/css" href="Styles/StyleSheet_profile_template.css" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        
    </head>
    <body>
         
            <div class="header"> 
              <!-- <div class="row"> -->
                <div class="header_title">
                    <h1>Bodima.lk</h1>
                </div>
              <!--  <div class="user_signin_login">-->

                <div class="user_block">
                   <!-- <div class="profile"> -->
                     <img src="Images/profile_img2.jpg" alt="Profile Image" class="prof_img"><br/>
                     <!-- <div class="profile_dropdown">
                        <button class="dropbtn">profile</button>
                        <div class="profile_dropdown-content">
                          <a href="#">Go to profile</a>
                          <a href="#">Edit profile</a>
                          <a href="#">Post New Ads</a>
                          <a href="#">My Ads</a>
                          <a href="foodposts.php">Order food</a>
                          <a href="#">Logout</a>
                        </div>
                      </div> -->
                     
                  <!-- <button class="button_signUp">Sign Up</button> 
                  <button class="button_logIn">Log In</button>  -->
                <!--</div>-->
                   <!-- </div> -->
                </div>
                <!-- <div class="icon_block">
                    <span class="material-icons">notification_important</span>
                     <span class="material-icons">reorder</span> 
                     <span class="material-icons">analytics</span>
                </div> -->
              <!-- </div> -->
            </div>
            
            <!-- <nav class="menu_bar">
                <ul class="menu">
                    <li><a href="../bodima/new/home_page">Home</a></li>
                    <li><a href="Boardings.php">Boarding</a></li>
                    <li><a href="AboutUs.php">About Us</a></li> -->
                    <!-- comment after testing -->
                    <!-- <li><a href="BoardingPage.php">boarding page</a></li> -->
                    <!-- ********************* -->
                   <!--  <div class="search-container">
                        <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </ul>
            </nav>
             -->
<div class="container">
  <div class="sidebar">
      <div class="profile_info">
        <img src="Images/profile_img2.jpg" class="profile_image" alt="">
        <h4>Jessica</h4>
      </div>
      <a href="#"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="#"><i class="fas fa-edit"></i><span>Edit Profile</span></a>
      <a href="#"><i class="fas fa-plus-circle"></i><span>Post New Ads</span></a>
      <a href="#"><i class="fas fa-ad"></i><span>My Ads</span></a>
      <a href="#"><i class="fas fa-users"></i><span>My Boarders</span></a>
      <a href="#"><i class="fas fa-arrow-circle-right"></i><span>Requests</span></a>
      <a href="#"><i class="fas fa-chart-bar"></i><span>Reports</span></a>
      <a href="#"><span>Logout</span></a>
    </div>

    <div class="content_template">
      <div class="var_content">
      <?php echo $content; ?>
      </div>

      <div class="content_container">
        <div class="title">
          Jessica Wotson

        </div>
        <div class="content">
          <div class="user_type">
            <div class="t_head">User type :</div>
            <div class="t_def">Boarding Owner</div>
          </div>

          <div class="first_name">
            <div class="t_head">First Name :</div>
            <div class="t_def">Jessica</div>
          </div>

          <div class="last_name">
            <div class="t_head">Last Name :</div>
            <div class="t_def">Wotson</div>
          </div>

          <div class="address">
            <div class="t_head">Address :</div>
            <div class="t_def">UCSC Building Complex, 35 Reid Ave, Colombo 00700</div>
          </div>

          <div class="email">
            <div class="t_head">Email :</div>
            <div class="t_def">jessi@gmail.com</div>
          </div>

          <div class="contact_number">
            <div class="t_head">Contact Number :</div>
            <div class="t_def">0773322110</div>
          </div>
        </div>
      </div>





    </div>

</div>
        
        
 <div class="footer">
  <p>copyrignt@Bodima.lk corparation</p>
</div>
    </body>
</html>

