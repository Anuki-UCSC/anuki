<!DOCTYPE html>

<html>
    <head>
    
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
                <div class="header_title">
                    <h1>Bodima.lk</h1>
                </div>

                <div class="user_block">
                     <img src="Images/profile_img2.jpg" alt="Profile Image" class="prof_img"><br/>    
                </div>
            </div>
            
            
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
      <a href="#"><i class="fas fa-clone"></i><span>Orders</span></a>
      <a href="#"><i class="fas fa-history"></i><span>History</span></a>
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
            <div class="t_def">Food Supplier</div>
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

