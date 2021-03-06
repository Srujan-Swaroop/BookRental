<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || Book Rental Service</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Book Rental Service</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
           <li><a href="about.php">About</a></li>
          <li><a href="products.php">Books</a></li>
          <li class='active'><a href="contact.php">Contact</a></li>
          
          <?php
          if(isset($_SESSION['username'])){
           if(($_SESSION['type'])==='admin'){
            echo '<li><a href="orders.php">All Orders</a></li>';
            echo '<li><a href="add.php">Add Books</a></li>';
            echo '<li><a href="req_admin.php">Requested Books</a></li>';
            echo '<li><a href="donate_admin.php">Donated Books</a></li>';
            echo '<li ><a href="view.php">View Books</a></li>';
            echo '<li><a href="users_info.php">View Users</a></li>';
           
          }
          else if(($_SESSION['type'])==='user'){
            echo '<li><a href="cart.php">Cart</a></li>';
            echo '<li><a href="orders.php">My Orders</a></li>';
            echo '<li><a href="donate.php">Donate Book</a></li>';
              echo '<li><a href="request.php">Request Book</a></li>';
            echo '<li><a href="account.php">My Account</a></li>';

          }
          
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">

        <h1>Software Engineering Project</h1>
        <h2>International Institute of Information Technology, Bangalore</h2>
        <p>Contact the authors through GitHub</p>
        <p><a href="https://github.com/RohithYogi">Rohith Yogi</a></p>
        <p><a href="https://github.com/Siddarth5199">Siddarth Reddy</a></p>
        <p><a href="https://github.com/k-puneeth">Srujan Swaroop</a></p>
        <p><a href="https://github.com/Srujan-Swaroop">Puneeth</a></p>


        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Book Rental Service. All Rights Reserved.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
