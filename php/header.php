<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Online Shop</title>
    <link rel="icon" href="img/Book-icon.png">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/menubar-script.js"></script>
  </head>
  <body>
    <!-- for header -->
    <header>
      <!-- Header -->

        <figure class="background" >
          <img id="back" src="img/hinterbilder.jpg" alt="picture background" >

        <!-- for my topnav ( logo and Admin) -->
          <div class="topnav">
            <ul id="nav">
              <li><a href="#"> <span>--</span> </a></li>
              <li><span style="padding-left:;"></span></li>
              <li><a href="php/en.php"><img src="img/cart.png" /></a></li>
              <li><a href="php/en.php"><img src="img/en.png" /></a></li>
              <li><a href="php/de.php"><img src="img/de.png"/></a></li>
              <li><a href="php/login.php"><img src="img/login.jpg"/></a></li>
            </ul>
          </div>
      </figure>

      <!-- Menubar -->
      <div id='cssmenu'>
      <ul>
         <li><a href='index.php'>Home</a></li>
         <li class='active'><a href='#'>Products</a>
            <ul>
               <li><a href='#'>Product 1</a>
                  <ul>
                     <li><a href='php/product-1.php'>Sub Product</a></li>
                     <li><a href='php/product-2.php'>Sub Product</a></li>
                  </ul>
               </li>
               <li><a href='#'>Product 2</a>
                  <ul>
                     <li><a href='php/product-3.php'>Sub Product</a></li>
                     <li><a href='php/product-4.php'>Sub Product</a></li>
                  </ul>
               </li>
            </ul>
         </li>
         <li><a href='php/about.php'>About</a></li>
         <li><a href='php/contact.php'>Contact</a></li>
      </ul>
    </div>
  </header>
